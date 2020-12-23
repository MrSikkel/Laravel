
Vue.component('modal', {
    template: '#modal-template'
  });
  
  // start app
  var app = new Vue({
    el: '#app',
    data: {
      showModalLogin: false,
      showModalReg: false,
      showModalFReg: false,
      showModalOrder: false,
      showCar: true
    },
  });

  var app2 = new Vue({
    el: '#show',
    data: {
      show: true,
    }
  });

  

