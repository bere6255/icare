<div class="my-3 my-md-5">
          <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <div class="card card-profile">
                  <div class="card-header" style="background-image: url(demo/photos/eberhard-grossgasteiger-311213-500.jpg);"></div>
                  <div class="card-body text-center">
                    <img class="card-profile-img" src="demo/faces/male/16.jpg">
                    <h3 class="mb-3">Peter Richards</h3>
                    <p class="mb-4">
                      Big belly rude boy, million dollar hustler. Unemployed.
                    </p>
                    <button class="btn btn-outline-primary btn-sm">
                      <span class="fa fa-twitter"></span> Follow
                    </button>
                  </div>
                </div>
              </div>

              <div class="col-lg-8">
                <form class="card">
                  <div class="card-body">
                    <h3 class="card-title">Edit Profile</h3>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="form-label">Company</label>
                          <input type="text" class="form-control" disabled="" placeholder="Company" value="Creative Code Inc.">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                          <label class="form-label">Username</label>
                          <input type="text" class="form-control" placeholder="Username" value="michael23">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                          <label class="form-label">Email address</label>
                          <input type="email" class="form-control" placeholder="Email">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                          <label class="form-label">First Name</label>
                          <input type="text" class="form-control" placeholder="Company" value="Chet">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                          <label class="form-label">Last Name</label>
                          <input type="text" class="form-control" placeholder="Last Name" value="Faker">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-label">Address</label>
                          <input type="text" class="form-control" placeholder="Home Address" value="Melbourne, Australia">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                          <label class="form-label">City</label>
                          <input type="text" class="form-control" placeholder="City" value="Melbourne">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                          <label class="form-label">Postal Code</label>
                          <input type="number" class="form-control" placeholder="ZIP Code">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="form-label">Country</label>
                          <select class="form-control custom-select">
                            <option value="">Germany</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group mb-0">
                          <label class="form-label">About Me</label>
                          <textarea rows="5" class="form-control" placeholder="Here can be your description" value="Mike">Oh so, your weak rhyme
You doubt I'll bother, reading into it
I'll probably won't, left to my own devices
But that's the difference in our opinions.</textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                  </div>
                </form>

                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">HTTP Request</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="form-group col-sm-4 col-md-2">
                        <label class="form-label">
                          Method <span class="form-required">*</span>
                        </label>
                        <select class="custom-select">
                          <option value="GET">GET</option>
                          <option value="POST">POST</option>
                          <option value="PUT">PUT</option>
                          <option value="HEAD">HEAD</option>
                          <option value="DELETE">DELETE</option>
                          <option value="PATCH">PATCH</option>
                        </select>
                      </div>
                      <div class="form-group col-sm-8 col-md-10">
                        <label class="form-label">
                          URL <span class="form-required">*</span>
                        </label>
                        <input name="url" type="text" class="form-control" value="https://content.googleapis.com/discovery/v1/apis/surveys/v2/rest">
                      </div>
                    </div>
                    <div class="form-label">Assertions</div>
                    <div class="table-responsive">
                      <table class="table mb-0">
                        <thead>
                          <tr>
                            <th class="pl-0">Source</th>
                            <th>Property</th>
                            <th>Comparison</th>
                            <th class="pr-0">Target</th>
                          </tr>
                        </thead>
                        <tbody><tr>
                          <td class="pl-0">
                            <select class="custom-select">
                              <option value="STATUS_CODE" selected="">Status code</option>
                              <option value="JSON_BODY">JSON body</option>
                              <option value="HEADERS">Headers</option>
                              <option value="TEXT_BODY">Text body</option>
                              <option value="RESPONSE_TIME">Response time</option>
                            </select>
                          </td>
                          <td>
                            <input type="text" class="form-control"></td>
                          <td>
                            <select class="custom-select">
                              <option value="EQUALS" selected="">Equals</option>
                              <option value="NOT_EQUALS">Not equals</option>
                              <option value="HAS_KEY">Has key</option>
                              <option value="NOT_HAS_KEY">Not has key</option>
                              <option value="HAS_VALUE">Has value</option>
                              <option value="NOT_HAS_VALUE">Not has value</option>
                              <option value="IS_EMPTY">Is empty</option>
                              <option value="NOT_EMPTY">Is not empty</option>
                              <option value="GREATER_THAN">Greater than</option>
                              <option value="LESS_THAN">Less than</option>
                            </select>
                          </td>
                          <td class="pr-0">
                            <input type="text" class="form-control" value="200">
                          </td>
                        </tr>
                        <tr>
                          <td class="pl-0">
                            <select class="custom-select">
                              <option value="STATUS_CODE">Status code</option>
                              <option value="JSON_BODY" selected="">JSON body</option>
                              <option value="HEADERS">Headers</option>
                              <option value="TEXT_BODY">Text body</option>
                              <option value="RESPONSE_TIME">Response time</option>
                            </select>
                          </td>
                          <td>
                            <input type="text" class="form-control" value="parameters.alt.type">
                          </td>
                          <td>
                            <select class="custom-select">
                              <option value="EQUALS">Equals</option>
                              <option value="NOT_EQUALS">Not equals</option>
                              <option value="HAS_KEY">Has key</option>
                              <option value="NOT_HAS_KEY">Not has key</option>
                              <option value="HAS_VALUE" selected="">Has value</option>
                              <option value="NOT_HAS_VALUE">Not has value</option>
                              <option value="IS_EMPTY">Is empty</option>
                              <option value="NOT_EMPTY">Is not empty</option>
                              <option value="GREATER_THAN">Greater than</option>
                              <option value="LESS_THAN">Less than</option>
                            </select>
                          </td>
                          <td class="pr-0">
                            <input type="text" class="form-control" value="string">
                          </td>
                        </tr>
                        <tr>
                          <td class="pl-0">
                            <select class="custom-select">
                              <option value="STATUS_CODE">Status code</option>
                              <option value="JSON_BODY">JSON body</option>
                              <option value="HEADERS">Headers</option>
                              <option value="TEXT_BODY">Text body</option>
                              <option value="RESPONSE_TIME" selected="">Response time</option>
                            </select>
                          </td>
                          <td>
                            <input type="text" class="form-control"></td>
                          <td>
                            <select class="custom-select">
                              <option value="EQUALS">Equals</option>
                              <option value="NOT_EQUALS">Not equals</option>
                              <option value="HAS_KEY">Has key</option>
                              <option value="NOT_HAS_KEY">Not has key</option>
                              <option value="HAS_VALUE">Has value</option>
                              <option value="NOT_HAS_VALUE">Not has value</option>
                              <option value="IS_EMPTY">Is empty</option>
                              <option value="NOT_EMPTY">Is not empty</option>
                              <option value="GREATER_THAN">Greater than</option>
                              <option value="LESS_THAN" selected="">Less than</option>
                            </select>
                          </td>
                          <td class="pr-0">
                            <input type="text" class="form-control" value="500">
                          </td>
                        </tr>
                        <tr>
                          <td class="pl-0">
                            <select class="custom-select">
                              <option value="STATUS_CODE">Status code</option>
                              <option value="JSON_BODY">JSON body</option>
                              <option value="HEADERS" selected="">Headers</option>
                              <option value="TEXT_BODY">Text body</option>
                              <option value="RESPONSE_TIME">Response time</option>
                            </select>
                          </td>
                          <td>
                            <input type="text" class="form-control" value="content-type">
                          </td>
                          <td>
                            <select class="custom-select">
                              <option value="EQUALS" selected="">Equals</option>
                              <option value="NOT_EQUALS">Not equals</option>
                              <option value="HAS_KEY">Has key</option>
                              <option value="NOT_HAS_KEY">Not has key</option>
                              <option value="HAS_VALUE">Has value</option>
                              <option value="NOT_HAS_VALUE">Not has value</option>
                              <option value="IS_EMPTY">Is empty</option>
                              <option value="NOT_EMPTY">Is not empty</option>
                              <option value="GREATER_THAN">Greater than</option>
                              <option value="LESS_THAN">Less than</option>
                            </select>
                          </td>
                          <td class="pr-0">
                            <input type="text" class="form-control" value="application/json; charset=UTF-8">
                          </td>
                        </tr>
                      </tbody></table>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Make request</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
