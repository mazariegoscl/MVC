function trim(i) {
  return i.replace(/^\s+|\s+$/g, "");
}

(function($) {
  $.addEventListener('DOMContentLoaded', () => {
    obj = [];
    this.$form = $.querySelector('form');
    this.$inputs = $.querySelectorAll("input:not([type='submit'])");
    $.querySelector('#create-user').addEventListener('submit', (e) => {
      e.preventDefault();
      this.$inputs.forEach((e, i) => {
        this.$key = e.getAttribute('name');
        this.$val = e.value;
        $val = trim($val);
        //console.log($val);
        if($val === "" || $val.length < 1) {
          //console.log("Está vacío " + (i + 1));
        }else{
          obj[$key] = $val;
        }
      });
    });
  });
})(document);
