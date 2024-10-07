// const userName = document.getElementById('txtUserName');
// const password = document.getElementById('txtPassword');
// const email = document.getElementById('txtEmail');
const phone = document.getElementById('txtPhone');
const address = document.getElementById('txtAddress');
// const dateOfBirth = document.getElementById('txtDateOfBirth');
const form = document.getElementById("form1");
// let validUserName = false;
// let validPassword = false;
// let validEmail = false;
let validPhone = false;
let validAddress = false;
// let validDateOfBirth = false;



// userName.addEventListener("blur", () => {
//     // let regx = /^[a-zA-Z]([a-zA-Z0-9/._/-])$/; //no space
//     // let regx = /^[a-zA-Z]+(?:\s[a-zA-Z]+)?$/; //for single space between name and surname
//     let regx = /^[a-zA-Z]+(?:\s[a-zA-Z]+)*$/;
//     console.log("UserName is blurred");
//     if (userName.value === "" || userName.value == null) {
//         let obj=document.getElementById('userName');
//         obj.innerText="User name is required";
//         obj.classList.add('show');
//         userName.classList.add("error");
//         userName.focus();
//         validUserName = false;
//     }
//     else if (!regx.test(userName.value)) {
//         let obj=document.getElementById('userName');
//         obj.innerText="Invalid User name";
//         //document.getElementById('userName').innerText = "Invalid UserName";
//         validUserName = false;
//         obj.classList.add('show');
//         userName.classList.add("error");
//         userName.focus();
//     }
//     else {
//         document.getElementById('userName').innerText = "";
//         validUserName = true;
//         userName.classList.remove("error");
//     }
// })
// password.addEventListener("blur", () => {
//     if (password.value === "" || password.value == null) {
//         let obj=document.getElementById('password');
//         obj.innerText = "Password is required";
//         validPassword = false;
//         obj.classList.add('show');
//         password.classList.add("error");
//         password.focus();
    
//     }
//     else if (password.value.length < 6) {
//         let obj=document.getElementById('password');
//         obj.innerText = "Password must be of at least 6 charadters";
//         validPassword = false;
//         obj.classList.add('show');
//         password.classList.add("error");
//         password.focus();
//     }
//     else {
//         document.getElementById('password').innerText = "";
//         validPassword = true;
//         password.classList.remove("error");
//     }

// })

// email.addEventListener("blur", () => {
//     let regx = /^[a-zA-Z_]([a-zA-Z0-9\.\-_]+)@([a-zA-Z0-9_\-]+)\.([a-zA-Z]){2,4}$/;
//     if (email.value === "" || email.value == null) {
//         let obj=document.getElementById('email');
//         obj.innerText = "Email field is required";
//         validEmail = false;
//         obj.classList.add('show');
//         email.classList.add("error");
//         email.focus();
//     }
//     else if (!regx.test(email.value)) {
//         let obj=document.getElementById('email');
//         obj.innerText = "Invalid email address";
//         validEmail = false;
//         obj.classList.add('show');
//         email.classList.add("error");
//         email.focus();
//     }
//     else {
//         document.getElementById('email').innerText = "";
//         validEmail = true;
//         email.classList.remove("error");
//     }
// })
phone.addEventListener("blur", () => {
    //regx=^[+0-9\-]{5}([0-9]{10})$//Match phone number with nepal's zip code
    let regx = /^[0-9]{10}$/;
    if (phone.value === "" || phone.value == null) {
        let obj=document.getElementById('phone');
        obj.innerText = "Phone number is required";
        validPhone = false;
        phone.classList.add("error");
        obj.classList.add('show');
        phone.focus();
    }
    else if (!regx.test(phone.value)) {
        let obj=document.getElementById('phone');
        obj.innerText = "Invalid Phone number";
        obj.classList.add('show');
        validPhone = false;
        phone.classList.add("error");
        phone.focus();
    }
    else {
        document.getElementById('phone').innerText = "";
        validPhone = true;
        phone.classList.remove("error");
    }
})
//for address
    address.addEventListener("blur", () => {
        let regx = /^[a-zA-Z]([a-zA-Z]){2,10}$/;
           console.log("Address is blurred");
        if (address.value === "" || address.value == null) {
            let obj=document.getElementById('address');
            obj.innerText="Address is required";
            obj.classList.add('show');
            address.classList.add("error");
            address.focus();
           validAddress = false;
        }
        else if (!regx.test(address.value)) {
            let obj=document.getElementById('address');
            obj.innerText="Invalid address ";
           validAddress = false;
            obj.classList.add('show');
            address.classList.add("error");
            address.focus();
        }
        else {
            document.getElementById('address').innerText = "";
           validAddress = true;
            address.classList.remove("error");
        }
    })

    
    // dateOfBirth.addEventListener("blur", () => {
    
    //     let regx = /^\d{4}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])$/;
    //     if (dateOfBirth.value === "" || dateOfBirth.value == null) {
    //         let obj=document.getElementById('dateOfBirth');
    //         obj.innerText = " Birth date field is required";
    //         validDateOfBirth = false;
    //         dateOfBirth.classList.add("error");
    //         obj.classList.add('show');
    //         dateOfBirth.focus();
    //     }
    //     else if (!regx.test(dateOfBirth.value)) {
    //         let obj=document.getElementById('dateOfBirth');
    //         obj.innerText = "Invalid  Birth date field";
    //         obj.classList.add('show');
    //         validDateOfBirth = false;
    //         dateOfBirth.classList.add("error");
    //         dateOfBirth.focus();
    //     }
    //     else {
    //         document.getElementById('dateOfBirth').innerText = "";
    //         validDateOfBirth = true;
    //         dateOfBirth.classList.remove("error");
    //     }
    // })






form.addEventListener("submit", (e) => {
    if (!( validAddress==true && validPhone==true )) {
        e.preventDefault();
        let length=document.getElementsByClassName('hide').length;
        for(i=0;i<length;i++){
            document.getElementsByClassName('hide')[i].classList.add('show');
            document.getElementsByClassName('form-control')[i].classList.add('error');
        }
        userName.focus();
    }
})


