Vue.component('zpeak-categories', {
    props: ['category'],
    template: '<div class="col-lg-3 col-md-3" style="padding-top: 20px;"><h3> <a :title="category.text" :href="category.url" @mouseover="imgIncrease(category.name)" @mouseout="imgReduce(category.name)"><span><img style="width:220px;" :id="category.name" :src="category.img" :alt="category.name"> </span></a></h3> <span>${ runtext }</span> </div>',
    methods: {
       imgIncrease: function(Id) {
        $('#'+Id).animate({ 'width': '+=30'}, 100);
      },
      imgReduce: function(Id) {
        $('#'+Id).animate({ 'width': '-=30'}, 100);
      }
    }
})

// new Vue({
//     delimiters: ['${', '}']
// })

new Vue({
  delimiters: ['${', '}'],
  el: '#app',
  data: {
    categoriesList: [
    	{ id: 1, name: 'art', text: 'Pratiquer et se cultiver', img: 'images/art.png', url: "/list/art" },
    	{ id: 2, name: 'run', text: 'Pratiquer et faire du sport', img: 'images/run.png', url: "/list/run" },
    	{ id: 3, name: 'eat', text: 'Pratiquer et manger', img: 'images/eat.png', url: "/list/eat" },
    	{ id: 4, name: 'party', text: 'Pratiquer et boire un verre', img: 'images/party.png', url: "/list/party" }
    ],
    runtext: 
  },

  beforeMount: function() {
    this.runtext = this.$el.attributes['data-text'].value;
  }
})
