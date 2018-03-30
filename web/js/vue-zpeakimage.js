Vue.component('zpeakimage', {
  delimiters: ['${', '}'],
  props: ['type', 'text', 'img', 'target'],
  template: '<div class="col-3" style="padding-top: 20px;"><h3><a :title="text" :href="target"><span> <img style="width:220px;" :id="type" :src="img" :alt="text"> </transition> </span></a></h3><span> ${text} </span></div>'
  // methods: {
  //   imgBounce: function doBounce(Id) {
  //       $('#'+Id).effect('bounce', {times: 3}, 500);
  //
  //       // $('#'+Id).animate({ 'width': '+=30'}, 100);
  //     }
  //     // setInterval(doBounce, 3000);
  //   // imgReduce: function(Id) {
  //     // $('#'+Id).animate({ 'width': '-=30'}, 100);
  //   // }
  // }
});

new Vue({
  el: '#activities'
});
