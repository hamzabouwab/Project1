import {menuLinksHoverEffect} from '../js/linksEffect.js'
const inputs=document.querySelectorAll("input:not(input[type='submit'])")
const pass=document.querySelectorAll("input[type='password']")
const submit=document.querySelector("#submit")
const regex=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

inputs.forEach(element => {
  element.addEventListener("focus",()=>{
    element.classList.remove("err")
  })
});

if(submit.nodeType!=null){
submit.addEventListener("click",(e)=>{
  let i = 0
  // const prenom= inputs[0].value
  const nom= inputs[1].value
  const email= inputs[2].value
  // const date= inputs[3].value
  const mdp= inputs[4].value
  const mdpConf= inputs[5].value  
  
  inputs.forEach(inp=>{
    if(inp.value===""){
      inp.classList.add("err")
      i++
    }
  })
    if(i>0){
      alert("veuillez renseignez tous les champs !")
      e.preventDefault()

    }else{
      if(!regex.test(email)){
        alert("l'email est incorrect !")
        e.preventDefault()
      }else{
        if(mdp.length < 8 || mdp.length > 20 ){
          alert("la longueur du mot de passe doit être compris entre 8 et 20 caractères !")
          e.preventDefault()
        }else{
          if(mdpConf.length < 8 || mdpConf.length > 20){
            alert("la longueur de la confirmation du mot de passe doit être compris entre 8 et 20 caractères !")
            
            e.preventDefault()
          }else{
            if(mdp != mdpConf){
              alert("les mots de passes ne sont pas identiques !")
              e.preventDefault()
            }else{  
              alert("vous êtes inscris avec succés")
            }
          }
        }
      }
    } 
})
}