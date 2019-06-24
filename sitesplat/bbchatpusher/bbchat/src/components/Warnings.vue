<template>
	<div class="alert alert-warning">
		<p v-if="isAdmin">BBChat está correctamente habilitado pero no se han configurado una sala todavía. Por favor, configure al menos 1 sala.</p>
		<p v-else-if="!isBanned">Ups! Parece que no tiene espacio para chatear. Inténtelo de nuevo más tarde o comuníquese con el administrador del foro si cree que esto podría ser un problema...</p>
		<p v-else-if="isBanned" class="no-room-msg">Has sido bloqueado</p>
	</div>
</template>

<script>
export default {
	name: 'Warnings',
	props: {
		isAdmin: Boolean,
		isBanned: Boolean,
	}
}
</script>
