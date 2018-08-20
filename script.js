$('#2page').hide();//hiding botoom
$('#3page').hide();//hiding botoom
$('#2page').hide();
$('#3page').hide();
$(document).ready(function() { //sending data from register form
	$("#pic3").bind("click",function() {
		$('#2page').show();
    $('#3page').show();
    /*$.post("authors.php",{pic:3,
  },function(data)
  {
    data = JSON.parse(data);
    for(var id in data)
    {
      document.getElementById('show').innerHTML = "kek";
    }
  });*/
    return false;
	});
});
$(document).ready(function() { //sending data from register form
	$("#pic6").bind("click",function() {
		$('#3page').hide();
		$('#2page').show();
    /*$.post("authors.php",{pic:6
  },function(data)
  {
    data = JSON.parse(data);
    for(var id in data)
    {
			document.getElementById('show').innerHTML = data[id];
    }
  });*/
    return false;
	});
});
$(document).ready(function() { //sending data from register form
	$("#pic9").bind("click",function() {
		$('#2page').hide();
		$('#3page').hide();
    /*$.post("authors.php",{pic:9
  },function(data)
  {
    data = JSON.parse(data);
    for(var id in data)
    {
      document.getElementById('show').innerHTML = "hello";
    }
  });*/
    return false;
	});
});
/*$(document).ready(function() { //sending data from register form
	$("#1page").bind("click",function() {
    $.post("authors.php",{page:1
  },function(data)
  {
    data = JSON.parse(data);
    for(var id in data)
    {
      document.getElementById('show').innerHTML = "hello";
    }
  });
    return false;
	});
});
$(document).ready(function() { //sending data from register form
	$("#2page").bind("click",function() {
    $.post("authors.php",{page:2
  },function(data)
  {
    data = JSON.parse(data);
    for(var id in data)
    {
      document.getElementById('show').innerHTML = "hello";
    }
    return false;
	});
	});
});
$(document).ready(function() { //sending data from register form
	$("#3page").bind("click",function() {
    $.post("authors.php",{page:3
  },function(data)
  {
    data = JSON.parse(data);
    for(var id in data)
    {
      document.getElementById('show').innerHTML = "hello";
    }
  });
    return false;
	});
});

$(document).ready(function() { //sending data from register form
	$("#3pic").bind("click",function() {
    document.getElementById('show').innerHTML = "hello";
    $('#2page').show();//hiding botoom
    $('#3page').show();
		  return false;
  });
	});
  $(document).ready(function() { //sending data from register form
  	$("#6pic").bind("click",function() {
      document.getElementById('show').innerHTML = "lol";
      $('#3page').hide();//hiding botoom
      $('#2page').show();//hiding botoom
    });
      return false
  	});
    $(document).ready(function() { //sending data from register form
    	$("#9pic").bind("click",function() {
        document.getElementById('show').innerHTML = "kek";
        $('#2page').hide();//hiding botoom
        $('#3page').hide();//hiding botoom
      });
        return false;
    	});
