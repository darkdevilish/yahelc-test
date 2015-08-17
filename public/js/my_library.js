//Custom addEventListener func library
function on(trigger, func, el){
  if(el.addEventListener){
    return el.addEventListener(trigger, func);
  }else if(el.attachEvent){
     return el.attachEvent(trigger, func);
  }
}
//Custom querySelector func library
function _(selector, all=false){
  if(all == true){
    return document.querySelectorAll(selector);
  }else{
    return document.querySelector(selector);
  }
}
//Ajax helpers
function ajaxObj( meth, url ) {
  var x = new XMLHttpRequest();
  x.open( meth, url, true );
  x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  return x;
}
function ajaxReturn(x){
  if(x.readyState == 4 && x.status == 200){
      return true;  
  }
}