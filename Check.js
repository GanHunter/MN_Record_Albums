function FormCheck(form)
  {
    if(form.username.value == "") {
      alert("Error: Username cannot be blank!");
      form.username.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.username.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.username.focus();
      return false;
    }
    if(form.name.value == "") {
      alert("Error: Name cannot be blank!");
      form.name.focus();
      return false;
    }
        
    if(form.pass.value != "" && form.pass.value == form.confirm.value) {
        if(form.pass.value.length < 6) {
        alert("Error: Password must contain at least six characters");
        form.pass.focus();
        return false;
      }
      if(form.pass.value == form.username.value) {
        alert("Error: Password must be different from Username");
        form.pass.focus();
        return false;
      }

    }
    else {
      alert("Error: Please check that you've entered and confirmed your password");
      form.pass.focus();
      return false;
    }
    se = /\S+@\S+\.\S+/;
    if(!se.test(form.email.value)) {
      alert("Error: Email format is wrong!");
      form.email.focus();
      return false;
    }

  }



