
function addSendListener(){
 var target = $('#new-message-input');
 target.keyup(sendKeyup);

 var button = $('#btn');
 button.click(sendClick);
}

function sendKeyup(){
  var key = event.which;

  if (key === 13) {
    var input = $('#new-message-input');
    var txt = input.val();
    input.val('');
    sendMessage(txt);
  }
console.log("hello");
}

function sendMessage(txt){
  var template = $('#template-message-sent .msg-sent').clone();
  var target = $('#target');

  template.find('#message-sent').text(txt);
  target.append(template);
  // setTimeout(replyMessage, 2000);
}

function sendClick(){
   var input = $('#new-message-input');
   var txt = input.val();

   if (txt) {
     var input = $('#new-message-input');
     var txt = input.val();
     input.val('');
     sendMessage(txt);
   }
}

function init(){
  addSendListener();

}
$(document).ready(init);
