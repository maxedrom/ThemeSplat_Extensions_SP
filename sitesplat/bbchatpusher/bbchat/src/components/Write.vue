<template>
	<div class="write">
		<p class="disable-send-reason" v-if="disableSendReason !== ''" v-html="disableSendReason"></p>
		<div class="chat-btns-toolbar">
			<a v-if="canSendFiles" v-tooltip.left="'Subir adjunto'" href="javascript:;" class="write-link attach" @click="displayAttach = !displayAttach"><i class="fa fa-file"></i></a>
			<a v-if="giphyApi !== ''" v-tooltip.left="'GIFs'" href="javascript:;" class="write-link giphy-btn" @click="displayGiphy = !displayGiphy"><i class="fa fa-film" aria-hidden="true"></i></a>
			<a v-tooltip.left="'Enviar mensaje'" href="javascript:;" class="write-link send" @click="disableSend ? false : send()"><i aria-hidden="true" class="fa fa-sign-in"></i></a>
		</div>

		<textarea ref="input" id="chatbox-input" @keydown.enter="send" :placeholder="placeholder" v-model="value" @focus="displayGiphy = false; displayAttach = false"></textarea>
		<a v-if="markdown" href="#MarkdownModal" title="Markdown help" type="button" data-toggle="modal" data-target="#MarkdownModal" class="write-link markdown_help_btn"><i aria-hidden="true" class="fa fa-fw fa-markdown"></i> Sintaxis de Markdown habilitada</a>

		<div v-if="canSendFiles" :class="['bbchat-attachments-input', {'bbchat-attachments-input-show': displayAttach}]">
			<input type="file" @change="sendFile">
			<span v-if="showAttachLoader" class='button-upld'><i class="fa fa-spinner fa-spin"></i></span>
			<span v-else class='button-upld'>Choose</span>
			<label class='label-upld' data-js-label>{{ attachLabel }}</label>
		</div>

		<div v-if="giphyApi !== ''" :class="['giphy', {'giphy-show': displayGiphy}]">
			<input v-model="giphyQuery" placeholder="search gif (e.g. cat, dog, funny)">
			<VuePerfectScrollbar :settings="{maxScrollbarLength: 60, suppressScrollX: true}" tagname="ul" class="giphy-results">
				<li v-for="item in giphyResults" :key="item.id"><img :src="item.images.preview_gif.url" @click="sendGiphy(item.images.original.url)"></li>
			</VuePerfectScrollbar>
		</div>

		<slot name="emoji-picker"></slot>

		<emoji-picker v-if="emojis" @emoji="append" :search="emojiQuery">
			<div
				class="emoji-invoker write-link"
				slot="emoji-invoker"
				slot-scope="{ events }"
				v-on="events"
			>
				<svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
				<path d="M0 0h24v24H0z" fill="none"/>
				<path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z"/>
				</svg>
			</div>
			<div slot="emoji-picker" slot-scope="{ emojis, insert, display }">
				<div class="emoji-picker">
					<div class="emoji-picker__search">
						<input type="text" v-model="emojiQuery" v-focus>
					</div>
					<VuePerfectScrollbar :settings="{maxScrollbarLength: 60, suppressScrollX: true, minScrollbarLength: 40}" tagname="div">
						<div v-for="(emojiGroup, category) in emojis" :key="category">
						<h5>{{ category }}</h5>
						<div class="emojis">
							<span
							v-for="(emoji, emojiName) in emojiGroup"
							:key="emojiName"
							@click="insert(emoji)"
							:title="emojiName"
							>{{ emoji }}</span>
						</div>
						</div>
					</VuePerfectScrollbar>
				</div>
			</div>
		</emoji-picker>
	</div>
</template>

<script>
import he from 'he';
import VuePerfectScrollbar from 'vue-perfect-scrollbar';
import EmojiPicker from 'vue-emoji-picker';

import { Textcomplete, Textarea } from 'textcomplete'
import emojis from '../data/emojis.json';

const default_attach_label = 'No file selected';

export default {
	name: 'Write',
	components: {
		VuePerfectScrollbar,
		EmojiPicker,
	},
	props: {
		currentUser: Object,
		roomId: String,
		isTyping: Function,
		roomName: String,
		disableSend: Boolean,
		disableSendReason: String,
		markdown: Boolean,
		giphyApi: '',
		canSendFiles: Boolean,
		mentions: Boolean,
		uMentions: String,
		userSendSound: String,
		playSound: Function,
		emojis: Boolean,
	},
	data() {
		return {
			value: '',
			showAttachLoader: false,
			attachLabel: default_attach_label,
			displayAttach: false,
			displayGiphy: false,
			giphyQuery: '',
			giphyResults: [],
			giphyTrendingResults: [],
			emojiQuery: '',
			textcomplete: null,
		}
	},
	computed: {
		placeholder() {
			return '#' + he.decode(this.roomName);
		}
	},
	watch: {
		value(val) {
			this.isTyping(val);
		},
		giphyQuery(val) {
			if (val === '') {
				this.giphyResults = this.giphyTrendingResults;
				return;
			}

			fetch('https://api.giphy.com/v1/gifs/search?api_key=' + this.giphyApi + '&limit=28&offset=0&rating=G&lang=en&q=' + val)
			.then(response => response.json())
			.then(response => {
				this.giphyResults = response.data;
			});
		},
	},
	methods: {
		send(e) {
			if ((e && e.shiftKey) || (this.textcomplete && this.textcomplete.dropdown.getActiveItem())) {
				return;
			}

			this.value = this.value.trim();

			if (this.value === '' || this.disableSend) {
				return;
			}

			Promise.all(window.bbchatBeforeSendChecks.map(fn => {
				return fn(this.value);
			}))
			.then(() => {
				this.sendMessage(this.value);
				setTimeout(() => this.value = '', 10);
			})
			.catch(() => {});
		},
		sendGiphy(url) {
			this.sendMessage('bbchatpusher:giphy:' + url);
		},
		sendFile(e) {
			const file = e.target.files[0];
			if (file) {
				this.sendMessage(file.name, file);
			}
		},
		sendMessage(value, attachment = null) {
			let options = {
				roomId: this.roomId,
				parts: [
					{
						type: 'text/plain',
						content: value,
					}
				]
			};

			if (attachment) {
				options.parts.push({
					file: attachment
				});

				this.attachLabel = attachment.name;
				this.showAttachLoader = true;
			}

			this.currentUser.sendMultipartMessage(options)
			.then(messageId => {
				// backend will take care of mentions
				if (this.mentions) { // TODO: mozeme vyrazne zredukovat tieto volania ked skontrolujeme ci value obsahuje zavinac
					let formData = new FormData();
					formData.append('message', value);
					formData.append('messageId', messageId);
					formData.append('roomId', this.roomId);

					fetch(this.uMentions, {
						method: 'POST',
						credentials: 'same-origin',
						body: formData,
					});
				}

				this.currentUser.setReadCursor({
					roomId: this.roomId,
					position: messageId,
				});

				this.playSound('send');

				if (attachment) {
					this.displayAttach = false;
					this.attachLabel = default_attach_label;
					this.showAttachLoader = false;
				}
			})
			.catch(() => {
				alert('We were unable to send the message. Please, try again.');
			});
		},
		append(emoji) {
			this.value += emoji;
		},
	},
	directives: {
		focus: {
			inserted(el) {
				el.focus();
			},
		},
	},
	created() {
		if (this.giphyApi !== '')
		{
			fetch('https://api.giphy.com/v1/gifs/trending?api_key=' + this.giphyApi + '&limit=28&rating=G')
			.then(response => response.json())
			.then(response => {
				this.giphyTrendingResults = this.giphyResults = response.data;
			});
		}

		// add ability for external components to alter the value.
		document.addEventListener('bbchat-new-value', (e) => {
			this.value += e.detail;
		});
	},
	mounted() {
		if (!this.emojis) {
			return;
		}

		const editor = new Textarea(this.$refs.input);
		this.textcomplete = new Textcomplete(editor);
		this.textcomplete.register([{
			match: /(^|\s):(\w+)$/,
			search: (term, callback) => callback(Object.keys(emojis).filter(emoji => emoji.startsWith(term))),
			replace: key => '$1' + emojis[key] + ' ',
			template: key => emojis[key] + ' ' + key,
		}]);
	},
	beforeDestroy() {
		if (this.textcomplete) {
			this.textcomplete.destroy();
		}
	},
}
</script>
