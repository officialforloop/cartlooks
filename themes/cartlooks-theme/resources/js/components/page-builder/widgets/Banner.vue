<template>
  <!-- Banner -->
  <section class="product-banner product-banner-overflow-auto">
    <div v-if="sliderLoading">
      <div class="desktop">
        <div class="d-flex">
          <skeleton height="450px" class="w-25"></skeleton>
          <skeleton
            height="450px"
            class="slider-container mx-4 skeleton"
          ></skeleton>
          <skeleton height="450px" class="w-25"></skeleton>
        </div>
      </div>
      <div class="mobile">
        <skeleton height="120px" class="w-100"></skeleton>
      </div>
    </div>
    <div class="slider-container" v-else>
      <swiper
        v-if="properties && Object.keys(properties).length > 0"
        :slidesPerView="'auto'"
        :direction="'horizontal'"
        :rtl="true"
        :loop="true"
        :spaceBetween="20"
        :modules="modules"
        :autoplay="{
          delay: 2000,
          disableOnInteraction: false,
          pauseOnMouseEnter: true,
        }"
        :pagination="{
          clickable: true,
        }"
        @onSlideChange="onSlideChange"
        class="mySwiper theme-slider-dots dots-bottom-30"
      >
        <swiper-slide v-for="slide in sliders" :key="slide">
          <product-banner :content="slide" />
        </swiper-slide>
      </swiper>
    </div>
  </section>
  <!-- End Banner -->
</template>

<script>
import { defineAsyncComponent } from "vue";
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay, Pagination } from "swiper/modules";

const ProductBanner = defineAsyncComponent(() =>
  import("@/components/ui/ProductBanner.vue")
);

export default {
  components: {
    Swiper,
    SwiperSlide,
    ProductBanner,
  },

  setup() {
    return {
      modules: [Autoplay, Pagination],
    };
  },

  name: "Banner",

  data() {
    return {
      sliderLoading: true,
      sliders: [],
    };
  },

  props: {
    properties: {
      type: Object,
      default: {},
    },
  },

  mounted() {
    this.modifyProperties();
    setTimeout(() => {
      this.$nextTick(() => {});
    }, 2000);
  },

  methods: {
    /**
     * Modified Properties
     */
    modifyProperties() {
      let new_prop = [];
      for (let slide in this.properties) {
        new_prop.push({
          title: this.properties[slide].title,
          url: this.properties[slide].url,
          desktop: this.properties[slide].desktop_image.path,
          mobile: this.properties[slide].mobile_image.path,
        });
      }
      this.sliders = new_prop;
      this.sliderLoading = false;
    },
  },
  onSlideChange(swiper) {
    console.log(swiper.activeIndex);
    console.log(swiper.slides.length - 1);
    if (swiper.activeIndex === swiper.slides.length - 1) {
      swiper.slideTo(0);
    }
  },
};
</script>
<style lang="scss">
.product-banner-overflow-auto {
  overflow: hidden;
  .swiper {
    overflow: initial;
  }
}
</style>
