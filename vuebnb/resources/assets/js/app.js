import Vue from 'vue';
import sample from './data';
import "core-js/fn/object/assign";
import { populateAmenitiesAndPrices } from './helpers';

let model = JSON.parse(window.vuebnb_listing_model);
model = populateAmenitiesAndPrices(model);

console.log(model);

var app = new Vue({
  el: '#app',
  data: Object.assign(model, {
    headerImageStyle: {
      'background-image': 'url(' + model.images[0] +')'
    },
    contracted: true,
    modalOpen: false
  }),
  methods : {
    escapeKeyListener : function(evt) {
      if(evt.keyCode === 27 && this.modelOpen) {
        this.modelOpen = false;
      }
    }
  },
  watch: {
    modalOpen: function() {
      var className = 'modal-open';
      if (this.modalOpen) {
        document.body.classList.add(className);
      } else {
        document.body.classList.remove(className);
      }
    }
  },
  created: function() {
    document.addEventListener('keyup', this.escapeKeyListener);
  },
  destroyed: function() {
    document.removeEventListener('keyup', this.escapeKeyListener);
  }
});