const form = document.querySelector('#form_control');
const name = document.querySelector('#name');
function sendMsg(e) {
    e.preventDefault();
    
    
    email = document.querySelector('#email');
    msg = document.querySelector('#msg');

Email.send({
    Host : "smtp.elasticemail.com",
    Username : "nyonaingloon327@gmail.com",
    Password : "62713203219A046611C1788488198A1880CB",
    //SecureToken : "ba31706b-388f-489e-b5e8-007b3465a1ab",
    To : 'nyonaingloon327@gmail.com',
    From :'nyonaingloon327@gmail.com',
    Subject : "Contact Form",
    Body : msg.value
}).then(
  message => alert(message)
);
}
form.addEventListener('submit', sendMsg);