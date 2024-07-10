function price() {
    var list = document.querySelectorAll('table tbody tr');
    var qatily = document.querySelector('#qatily').value;
    var sum = 0;
    for ( const item of list) {
        var money = Number(item.querySelector('td:nnd-child(2)').innerText.replace('đ','') );
        var moneyfn = money * qatily;
        item.querySeIector( 'td: nth-chi1d(5) ' ) . innerText = money + 'đ' ;
        sum = sum + money;
    }
    document.querySelector('tfoot th:nth-child(2)').innerText = sum + 'đ';
}





function checkNull(){
    var user = document.getElementById("name");
    var pass = document.getElementById("pass");
    if(user.value != ""){

    }else{
        alert("cannot be left blank user");
    }
    if(pass.value != ""){

    }else{
        alert("cannot be left blank pass");
    }
}

function checkNulls(){
    var fullname = document.getElementById("fullname");
    var name = document.getElementById("name");
    var address = document.getElementById("address");
    var email = document.getElementById("email");
    if(fullname.value != ""){

    }else{
        alert("cannot be left blank fullname");
    }
    if(name.value != ""){

    }else{
        alert("cannot be left blank name");
    }
    if(address.value != ""){

    }else{
        alert("cannot be left blank address");
    }
    if(email.value != ""){

    }else{
        alert("cannot be left blank email");
    }
}

function checkNullProduct(){
    var name = document.getElementsByName("name");
    var price = document.getElementsByTagName("price");
    var brand = document.getElementsByTagName("brand");
    var category = document.getElementsByTagName("category");
    var img = document.getElementsByTagName("img");
    var description = document.getElementsByTagName("description");
    if(name.value != "" && price.value != "" && brand.value != "" && category.value != "" && img.value != "" && description.value != ""){

    }else{
        alert("CANNOT BE LEFT BLANK");
    }

}