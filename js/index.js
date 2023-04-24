
const formContainer=document.querySelectorAll(".form-container")
const menu= document.querySelector(".menu")
const search=document.getElementById("search")
const menuLinks=document.querySelectorAll(".menu .nav-item .nav-link")
menuLinks.forEach(link => {
      link.addEventListener("click",()=>{
            link.style.backgroundColor="red"
      })
});

//AJAX to get table data
search.addEventListener("keyup",()=>{
        var xmlHTTP= new XMLHttpRequest();
        var method= "GET";
        var url= "tableau.php";
        var option= true;
        xmlHTTP.onreadystatechange=function(){
            if(xmlHTTP.status== 200 && xmlHTTP.readyState== 4){
  
                  var text=`<tr>
                              <th>id</th>
                              <th>email</th>
                              <th>first name</th>
                              <th>last name</th>
                              <th>birthday</th>
                              <th>date inscription</th>
                        </tr>`
                  var array= JSON.parse(xmlHTTP.responseText)
                  for(var i=0;i<array.length;i++){
                        if(array[i].first_name.substring(0,search.value.length).toLowerCase() == search.value.toLowerCase()){

                              text+=`<tr>
                                          <td>${array[i].id}</td>
                                          <td>${array[i].email}</td>
                                          <td>${array[i].first_name}</td>
                                          <td>${array[i].last_name}</td>
                                          <td>${array[i].birthday}</td>
                                          <td>${array[i].date_inscription}</td>
                                    </tr>`
                        }
                  }

                  document.getElementById("txtHint").innerHTML=text;
            }
      }
      xmlHTTP.open(method,url,option)
      xmlHTTP.send()
      })