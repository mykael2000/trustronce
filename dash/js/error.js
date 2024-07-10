function handleError(response) {

    let input = document.querySelectorAll('.el'); // get all the input fields with the class `.el`

    input.forEach( (field) => {

          let errorElement = document.querySelector('.'+field.name); // this will get any element (in our case span tag) that the class attribute value is same with the input tag name attribute value

          // check if the input field has an error

          if(response.hasOwnProperty(field.name)) {

                  errorElement.innerHTML = response[field.name]; // replace the text content of the span tag with the error response message

            } else {

                  errorElement.innerHTML = ''; // else leave it empty or set it to display none.

            }

    } );

  }