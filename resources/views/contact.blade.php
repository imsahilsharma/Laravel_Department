<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <title>Contact Us</title>
</head>

<body>
  <br>
  <h1 style="text-align: center; font-family: Verdana, Geneva, Tahoma, sans-serif;">Department of Computer Science
  </h1><br>
  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">RCSS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/department">Department</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/contact">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <div class="container">
    <div class="row">
      <div class="col col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5">
        <br>
        <h1>Send Your Query To Us</h1><br>
        <table class="table table-borderless">
          <tr>
            <td>Name </td>
            <td><input type="text" class="form-control"></td>
          </tr>
          <tr>
            <td>Email ID</td>
            <td><input type="text" class="form-control"></td>
          </tr>
          <tr>
            <td>Query</td>
            <td><input type="text" class="form-control" style="line-height: 3;"></td>
          </tr>
          <tr>
            <td></td>
            <td><button type="button" class="btn btn-success" data-bs-toggle="modal"
                data-bs-target="#exampleModal">SUBMIT</button>
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Enquiry</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Are you sure to Send Query ? If yes, then click SEND otherwise click NO
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">NO</button>
                      <button type="button" class="btn btn-success" data-bs-dismiss="modal">SEND</button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        </table>
      </div>
      
      <div class="col col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
      
      <div class="col col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5">
        <br>
        <h1>Contact Info</h1><br>
        <p>Rajagiri College of Social Sciences (Autonomous),<br>Rajagiri P.O, Kalamassery, Cochin - 683 104,
          Kerala, India.
          <br><br>Email ID : admin@rajagiri.edu (Office)
          <br>Phone : +91 484 - 2911111 / 2911507
          <br>Fax No : +91 484 - 2532862
        </p>
      </div>
    </div>

    <div class="row">
      <br>
      <h1>FAQs</h1><br>
      <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                How many Programs are Offered?
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Dept. of Computer Science offers 2 Programs that is MCA and MSc Computer Science(Data Analytics).
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                What are the timings to meet the department faculty?
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">You can meet the faculty of department on time :<br>Morning - 10AM to 01PM<br>Afternoon - 03PM to 05PM
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Is there placements available?
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Yes placement is available at the end semester of the program. Our college has linked with top technology giants for the placement drives.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
</body>

</html>