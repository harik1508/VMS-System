function handleCredentialResponse(response) {
    const credential = response.credential;
    // Send the credential to the server for verification
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'verify.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
      if (xhr.status === 200) {
        // Server verification successful
        const isAuthorized = xhr.responseText === 'authorized';
        if (isAuthorized) {
          // Redirect to the home page
        //   document.getElementById('content').style.display = 'block';
          window.location.href='localhost/VMS/landing_page.html';
        } else {
          // Show an error message or redirect to an unauthorized page
          // ewindow.location.href = 'unauthorized.html';
        }
      }
    };
    xhr.send('credential=' + credential);
  }
  