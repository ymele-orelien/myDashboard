<template>
	<!-- header section strats -->
	<headr />
	<!-- end header section -->
	<!-- slider section -->
<main>

	<router-view>

</router-view>
</main>
<foote />

</template>
<script>
import headr from "../Header/header.vue";
import foote from "../Footer/footer.vue";

export default {
	name: "site",
	components: {
		headr,
		foote
		
	}

}
</script>
<style></style>