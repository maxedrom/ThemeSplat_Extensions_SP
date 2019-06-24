<template>
	<div class="top">
		<span>
			<span class="name">{{ room_name }}</span>
			<br>
			<span v-html="announcement"></span>
		</span>
		<a
			v-show="roomId != 0"
			v-tooltip.top="'Marcar esta sala'"
			class="btn btn-sm btn-default pull-right"
			href="#"
			@click.prevent="pinRoom()">
				<i :class="['fa', {'fa-thumb-tack': pinnedRoomId != roomId, 'fa-times': pinnedRoomId == roomId}]" aria-hidden="true"></i>
		</a>
		<a
			v-tooltip.top="'Alternar panel izquierdo'"
			class="btn btn-sm btn-default btn-toggle-left pull-right"
			href="#"
			@click.prevent="toggleLeftPanel()">
				<i :class="['fa', 'fa-users']" aria-hidden="true"></i>
		</a>
		<a
			v-tooltip.top="soundOff ? 'Activar sonido' : 'Desactivar sonido'"
			class="btn btn-sm btn-default pull-right"
			href="#"
			@click.prevent="toggleSound()">
				<i :class="['fa', soundOff ? 'fa-volume-off' : 'fa-volume-up']" aria-hidden="true"></i>
		</a>
		<a
			v-if="roomId !== '0'"
			v-tooltip.top="'Volver a las salas'"
			@click.prevent="resetRoom()"
			href="#"
			class="btn btn-sm btn-default pull-right visible-xs">
				<i aria-hidden="true" class="fa fa fa-list-ul"></i>
		</a>
	</div>
</template>

<script>
import he from 'he';
import pinroom from '../functions/pinroom';

export default {
	name: 'RightHeader',
	props: {
		currentRoom: Object,
		roomId: String,
		toggleLeftPanel: Function,
		soundOff: Boolean,
		toggleSound: Function,
		resetRoom: Function,
	},
	data() {
		return {
			pinnedRoomId: pinroom.getPinnedRoomId(),
		}
	},
	computed: {
		room_name() {
			return he.decode(this.currentRoom.name);
		},
		announcement() {
			return he.decode(this.currentRoom.customData.announcement);
		},
	},
	methods: {
		pinRoom() {
			this.pinnedRoomId = pinroom.togglePinnedRoomId(this.roomId);
		}
	}
};
</script>
