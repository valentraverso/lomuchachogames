      function show(el){
        var ete = el.id;
        if(ete == "hidden"){
          var cla = el.className;
          document.getElementById("hide"+cla).style = "display:block";
          el.id = "active";
          document.getElementById("flechitaShow"+cla).innerHTML = "🔽"; 
        }else if(ete == "active"){
          var cla = el.className;
          document.getElementById("hide"+cla).style = "display:none";
          el.id = "hidden";
          document.getElementById("flechitaShow"+cla).innerHTML = "🔼"; 
        }
       }