// $("#register_btn").click(function () {
//     nameRegFn();
//     pwdRegFn();
//     telRegFn();
//     if (nameRegFn() && pwdRegFn() && telRegFn()) {
//         if (xxxxx) {
//             //加入阿贾克斯,看数据库有没有,obj=多少;不存在就else
//             //存在就返回backUlr的cookie
//         } else {
//             setCookie("username_" + $("#username").val(), $("#username"), 7);
//             window.location.href = "login.html";
//         }
//     } else {
//         alert("注册失败,请看提示!");
//     }

// });
// function nameRegFn() {
//     var nameReg = /^[a-z_$][a-z0-9_$]{2,9}$/ig;
//     if (nameReg.test($("#username").val())) {
//         return true;
//     } else {
//         $("#username").val("用户名不合法")
//         return false;
//     }
// }

// function pwdRegFn() {
//     var pwdReg = /[a-z0-9_$]{2,9}/ig;
//     if ($("#userpwd1").val() == $("#userpwd2").val()) {
//         if (pwdReg.test($("#userpwd2").val())) {
//             return true;
//         } else {
//             $("#userpwd1").val("密码格式不对");
//             return false;
//         }
//     } else {
//         $("#userpwd2").val("两次密码不一致");
//         return false;
//     }
// }

// function telRegFn() {
//     var telReg = /^[0-9]/g;
//     if (telReg.test($("#usertel").val())) {
//         return true;
//     } else {
//         $("#usertel").val("电话格式错误");
//         return false;
//     }
// }