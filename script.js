function change(id) {

    if (id == 1) {
        window.location = "index.php";
    } else if (id == 2) {
        document.getElementById("3").classList.toggle("d-none");
    }
}

function hide() {
    document.getElementById("3").classList.add("d-none");
}

function changePage() {
    window.location = "store.php";
}

var x = 1;

function changeForm(id) {

    document.getElementById("login").classList.toggle("d-none");
    document.getElementById("register").classList.toggle("d-none");
    document.getElementById("b2").classList.toggle("b2");
    document.getElementById("b2").classList.toggle("b");

    if (x == 1) {
        x = 0;
        document.getElementById("title").innerHTML = "User Register | New Tech";
    } else {
        x = 1;
        document.getElementById("title").innerHTML = "User LogIn | New Tech";
    }

}


var bm1;

function fogotPasswordNotice() {

    var m = document.getElementById("model1");
    bm1 = new bootstrap.Modal(m);
    bm1.show();

}

function forgotPassword() {

    bm1.hide();

    var m = document.getElementById("forgotPasswordModal");
    bm = new bootstrap.Modal(m);
    bm.show();

}

function showPassword() {

    var input = document.getElementById("passwd1");
    var btn = document.getElementById("pbtn1");

    if (input.type == "password") {
        input.type = "text";
        btn.innerHTML = "<i class='bi bi-eye-fill'></i>";
    } else {
        input.type = "password";
        btn.innerHTML = "<i class='bi bi-eye-slash-fill'></i>";
    }

}

function showPassword2() {

    var input = document.getElementById("passwd2");
    var btn = document.getElementById("pbtn2");

    if (input.type == "password") {
        input.type = "text";
        btn.innerHTML = "<i class='bi bi-eye-fill'></i>";
    } else {
        input.type = "password";
        btn.innerHTML = "<i class='bi bi-eye-slash-fill'></i>";
    }

}

function showPassword3() {

    var g1 = document.getElementById("g1");
    var gb1 = document.getElementById("gb1");


    if (g1.type == "password") {
        g1.type = "text";
        gb1.innerHTML = "<i class='bi bi-eye-fill'></i>";
    } else {
        g1.type = "password";
        gb1.innerHTML = "<i class='bi bi-eye-slash-fill'></i>";
    }

}

function showPassword4() {

    var g2 = document.getElementById("g2");
    var gb2 = document.getElementById("gb2");


    if (g2.type == "password") {
        g2.type = "text";
        gb2.innerHTML = "<i class='bi bi-eye-fill'></i>";
    } else {
        g2.type = "password";
        gb2.innerHTML = "<i class='bi bi-eye-slash-fill'></i>";
    }
}

function showPassword5() {

    var g3 = document.getElementById("g3");
    var gb3 = document.getElementById("gb3");

    if (g3.type == "password") {
        g3.type = "text";
        gb3.innerHTML = "<i class='bi bi-eye-fill'></i>";
    } else {
        g3.type = "password";
        gb3.innerHTML = "<i class='bi bi-eye-slash-fill'></i>";
    }
}

function showPassword6() {

    var g4 = document.getElementById("g4");
    var gb4 = document.getElementById("gb4");

    if (g4.type == "password") {
        g4.type = "text";
        gb4.innerHTML = "<i class='bi bi-eye-fill'></i>";
    } else {
        g4.type = "password";
        gb4.innerHTML = "<i class='bi bi-eye-slash-fill'></i>";
    }

}

function cAddress() {

    document.getElementById("add").classList.toggle("d-none");
    document.getElementById("newAdd").classList.toggle("d-none");
    document.getElementById("plus").classList.toggle("d-none");

}

function pay() {

    document.getElementById("manage").classList.toggle("d-none");
    document.getElementById("payment").classList.toggle("d-none");

    if (document.getElementById("tpay").innerHTML == "Manage My Account | New Tech") {
        document.getElementById("tpay").innerHTML = "Payment Option | New Tech";
    } else {
        document.getElementById("tpay").innerHTML = "Manage My Account | New Tech";
    }

}

function man() {

    if (document.getElementById("manage").classList.contains("d-none")) {
        document.getElementById("manage").classList.remove("d-none");
        document.getElementById("payment").classList.add("d-none");
        document.getElementById("tpay").innerHTML = "Manage My Account | New Tech";

    }

}

function deleteA() {

    document.getElementById("f1").classList.add("d-none");
    document.getElementById("f2").classList.remove("d-none");

}

function deleteA2() {

    var con = confirm("Are you sure , You want to Delete your Account?");

    if (con == true) {
        window.location = "index.php";
    }

}

function e() {

    document.getElementById("ec").classList.toggle("collapse");
    document.getElementById("eb").classList.toggle("collapsed");

}

function e2() {

    document.getElementById("ec2").classList.toggle("collapse");
    document.getElementById("eb2").classList.toggle("collapsed");

}

function e3() {

    document.getElementById("ec3").classList.toggle("collapse");
    document.getElementById("eb3").classList.toggle("collapsed");

}

function e4() {

    document.getElementById("ec4").classList.toggle("collapse");
    document.getElementById("eb4").classList.toggle("collapsed");

}

function changeAddminBg() {

    if (document.getElementById("dashboard").classList.contains("d-none")) {

        document.getElementById("dashboard").classList.remove("d-none");
        document.getElementById("aManage").classList.add("d-none");
        document.getElementById("announcement").classList.add("d-none");
        document.getElementById("Ap").innerHTML = "Admin | Dashboard | New Tech";

    } else {

        document.getElementById("dashboard").classList.add("d-none");

    }

}

function changeAddminBg2() {

    if (document.getElementById("aManage").classList.contains("d-none")) {

        document.getElementById("dashboard").classList.add("d-none");
        document.getElementById("aManage").classList.remove("d-none");
        document.getElementById("Ap").innerHTML = "Admin | Manage | New Tech";
        document.getElementById("announcement").classList.add("d-none");

    } else {
        document.getElementById("aManage").classList.add("d-none");
    }

}

function changeAddminBg7() {


    if (document.getElementById("ann").classList.contains("d-none")) {

        document.getElementById("dashboard").classList.add("d-none");

        document.getElementById("aManage").classList.add("d-none");
        document.getElementById("ann").classList.remove("d-none");
        document.getElementById("Ap").innerHTML = "Admin | Manage | New Tech";
    } else {
        document.getElementById("ann").classList.add("d-none");
    }

}


function changeAddminBg3() {

    if (document.getElementById("amp").classList.contains("d-none")) {

        document.getElementById("dashboard").classList.add("d-none");
        document.getElementById("amp").classList.remove("d-none");
        document.getElementById("Ap").innerHTML = "Admin | Manage | New Tech";

    } else {
        document.getElementById("amp").classList.add("d-none");
    }

}

function changeAddminBg4() {


    if (document.getElementById("ad").classList.contains("d-none")) {
        document.getElementById("re").classList.add("d-none");
        document.getElementById("ad").classList.remove("d-none");
        document.getElementById("Ap").innerHTML = "Admin | Manage | New Tech";
        document.getElementById("per").classList.add("d-none");

    } else {
        document.getElementById("ad").classList.add("d-none");
    }

}

function changeAddminBg5() {

    if (document.getElementById("re").classList.contains("d-none")) {

        document.getElementById("ad").classList.add("d-none");
        document.getElementById("re").classList.remove("d-none");
        document.getElementById("Ap").innerHTML = "Admin | Manage | New Tech";
        document.getElementById("per").classList.add("d-none");

    } else {
        document.getElementById("re").classList.add("d-none");
    }

}

function changeAddminBg6() {

    if (document.getElementById("per").classList.contains("d-none")) {

        document.getElementById("ad").classList.add("d-none");
        document.getElementById("per").classList.remove("d-none");
        document.getElementById("Ap").innerHTML = "Admin | Manage | New Tech";
        document.getElementById("re").classList.add("d-none");

    } else {
        document.getElementById("per").classList.add("d-none");
    }

}

function ame() {

    document.getElementById("mbox").classList.remove("d-none");
    document.getElementById("msb").classList.remove("d-none");

}

function admin(id) {

    if (id == "cabm") {

        document.getElementById("cabmc").classList.remove("d-none");
        document.getElementById("oabmc").classList.add("d-none");
        document.getElementById("anab").classList.add("d-none");

    } else if (id == "oabm") {

        document.getElementById("cabmc").classList.add("d-none");
        document.getElementById("oabmc").classList.remove("d-none");
        document.getElementById("anab").classList.add("d-none");

    } else if (id == "ana") {

        document.getElementById("cabmc").classList.add("d-none");
        document.getElementById("oabmc").classList.add("d-none");
        document.getElementById("anab").classList.remove("d-none");

    }

}

function spvm() {
    document.getElementById("spvmt").classList.toggle("d-none");
    document.getElementById("spvmt2").classList.toggle("d-none");
    document.getElementById("spvmb").classList.toggle("d-none");
    document.getElementById("spvmb2").classList.toggle("d-none");
}

var tc;

function terms() {

    var term = document.getElementById("terms");
    tc = new bootstrap.Modal(term);
    tc.show();

}

function acceptTerms() {

    document.getElementById("condition").checked;

}

function closeTerms() {

    tc.hide();

}

function nmf() {
    document.getElementById("nm").classList.toggle("d-none");
}

function anno() {
    document.getElementById("annod").classList.toggle("d-none");
}

// 1
function msgread() {
    document.getElementById("msgcon").classList.toggle("d-none");
}

function msgrep() {
    document.getElementById("tmsg").classList.toggle("d-none");
    document.getElementById("rep").classList.toggle("d-none");
}

function rsend() {
    var txt = document.getElementById("txtin").value;
    document.getElementById("rmsg").innerHTML = txt;
    document.getElementById("txtin").value = "";
}

// 2
function msgread2() {
    document.getElementById("msgcon2").classList.toggle("d-none");
    document.getElementById("new").classList.add("d-none");
}

function msgrep2() {
    document.getElementById("tmsg2").classList.toggle("d-none");
    document.getElementById("rep2").classList.toggle("d-none");
}

function rsend2() {
    var txt = document.getElementById("txtin2").value;
    document.getElementById("rmsg2").innerHTML = txt;
    document.getElementById("txtin2").value = "";
}

// 4
function msgread4() {
    document.getElementById("msgcon4").classList.toggle("d-none");
    document.getElementById("new4").classList.add("d-none");
}

function msgrep4() {
    document.getElementById("tmsg4").classList.toggle("d-none");
    document.getElementById("rep4").classList.toggle("d-none");
}

function rsend4() {
    var txt = document.getElementById("txtin4").value;
    document.getElementById("rmsg4").innerHTML = txt;
    document.getElementById("txtin4").value = "";
}

// 3
function msgread3() {
    document.getElementById("msgcon3").classList.toggle("d-none");
    document.getElementById("new3").classList.add("d-none");
}

function msgrep3() {
    document.getElementById("tmsg3").classList.toggle("d-none");
    document.getElementById("rep3").classList.toggle("d-none");
}

function rsend3() {
    var txt = document.getElementById("txtin3").value;
    document.getElementById("rmsg3").innerHTML = txt;
    document.getElementById("txtin3").value = "";
}