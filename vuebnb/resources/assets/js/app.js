import Vue from 'vue';
import sample from './data';

var app = new Vue({
  el: '#app',
  data: {
    title: sample.title,
    address: sample.address,
    about: sample.about,
    headerImageStyle : {
      'background-image': 'url(images/header.jpg)'
    },
    amenities: sample.amenities,
    prices: sample.prices,
    contracted: true,
    modalOpen: false,
  },
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
    ocument.removeEventListener('keyup', this.escapeKeyListener);
  }
});
console.log("Testing watch");
