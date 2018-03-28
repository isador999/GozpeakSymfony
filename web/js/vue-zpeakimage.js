Vue.component('zpeakimage', {
  delimiters: ['${', '}'],
  props: ['type', 'text', 'img', 'target'],
  template: '<div class="col-lg-3 col-md-3" style="padding-top: 20px;"><h3><a :title="text" :href="target" @mouseover="imgIncrease(type)" @mouseout="imgReduce(type)"><span> <img style="width:220px;" :id="type" :src="img" :alt="text"> </span></a></h3><span> ${text} </span></div>',
  methods: {
     imgIncrease: function(Id) {
      $('#'+Id).animate({ 'width': '+=30'}, 100);
    },
    imgReduce: function(Id) {
      $('#'+Id).animate({ 'width': '-=30'}, 100);
    }
  }
});

new Vue({
  el: '#activities'
});
