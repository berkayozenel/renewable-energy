<template>
  <router-view/>
</template>

<script>
export default {
  watch: {
    $route(to) {
      if (to.meta && to.meta.title) {
        document.title = to.meta.title;
        document.querySelector('meta[name="description"]').setAttribute('content', to.meta.description || '');
        document.querySelector('meta[name="keywords"]').setAttribute('content', to.meta.keywords || '');
      }
    }
  },
  mounted() {
    if (this.$route.meta && this.$route.meta.title) {
      document.title = this.$route.meta.title;
      document.querySelector('meta[name="description"]').setAttribute('content', this.$route.meta.description || '');
      document.querySelector('meta[name="keywords"]').setAttribute('content', this.$route.meta.keywords || '');
    }
  }
};
</script>