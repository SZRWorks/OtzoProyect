<?php $titulo = "Usuario"; include_once 'Templates/main_layout.php'; ?>


<?php startblock("Body"); ?>

<div align="center">
    <div class="card border-success shadow" style="max-width: 100%; border-radius: 5px; min-height: 750px;">

        <div class="card-header text-center">
            <span class="text-warning h2">
                Acerca de TestUser
            </span>
        </div>

        <!-- Information about user -->
        <blockquote class="blockquote mb-0">
            <div class="content-section">
                <br>
                <img class="icon-shape-sr shadow" src="Imagenes/EPICFox2.gif"
                    width="200px" height="200px">
                <div class="media-body">
                    <h2 class="account-heading text-light" style="
                        font-weight: bold; font-size: 45px;
                        text-shadow: 2px 0 0 #000, 
                        -2px 0 0 #000, 
                        0 2px 0 #000, 
                        0 -2px 0 #000, 
                        1px 1px #000, 
                        -1px -1px 0 #000, 
                        1px -1px 0 #000, 
                        -1px 1px 0 #000;">TestUser
                    </h2>
                    
                    <a class="h6 text-warning" href="#down"> Do you want to update your data?</a><br>

                    <!-- User badges -->
                    <span><strong class="h3" style="font-weight: bold;">Badges: </strong></span>
                    <span class="badge badge-pill badge-dark" title="Original founder of the page">Founder</span>
                    <span class="badge badge-pill badge-dark" title="One of the main developers of the page">Main
                        Developer</span>
                    <span class="badge badge-pill badge-info">Adobe CS 5.5</span>
                    <span class="badge badge-pill badge-info">Microsoft Office</span>
                    <span class="badge badge-pill badge-success">Windows XP, Vista, 7</span>

                    <br>
                    <span class="badge badge badge-secondary">
                        <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-calendar-date"
                            style="margin-right: 5px;" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z" />
                            <path fill-rule="evenodd"
                                d="M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1zm1-3a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z" />
                            <path fill-rule="evenodd"
                                d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z" />
                        </svg> User since: <span class="text-danger">Always!</span></span>
                </div>
                <hr>


                <span><strong class="h3" style="font-weight: bold;">
                    My Description: <br>
                </strong></span>
                <p style="max-width: 500px;">
                    Pequeña descripcion sobre el usuario :3
                </p>
                <br><br>

                <div class="card-header text-center border-top">
                    <span class="text-warning h2"> Update User Data </span>
                </div>
                <blockquote class="blockquote mb-0 border" style="max-width: 500px;">

                    <form action="/update_user_data/{{ account_data['Id'] }}" enctype="multipart/form-data"
                        method="POST" class="needs-validation">
                        <div class="card-body" align="left">
                            <div class="form-group">
                                <label for="nick" class="text-dark">User Name</label>
                                <input type="text" value="{{ account_data['UserName'] }}" name="nickname" id="nick"
                                    placeholder="New Nickname" class="form-control" maxlength="12" required>
                            </div>
                            <div class="form-group">
                                <label for="em" class="text-dark">User Email</label>
                                <input type="email" value="{{ account_data['Email'] }}" name="email" id="em"
                                    placeholder="New Email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="desc" class="text-dark">User Description</label>
                                <textarea class="form-control" maxlength="350" id="desc" name="description" rows="3"
                                    placeholder="New Description"
                                    style="max-height:150px; min-height: 100px; height: 100px;"
                                    required>Pequeña descripcion sobre el usuario :3</textarea>
                            </div>
                            <div class="form-group">
                                <label for="icon" class="text-dark">User Icon</label>
                                <input type="file" name="icon-image" class="form-control-file" id="icon"
                                    aria-describedby="fileHelp"
                                    accept=".png, .jpg {% if 'gif' in account_data['ValidIconsExtensions'] %}, .gif{% endif %}">
                                <small id="fileHelp" class="form-text text-muted">
                                    Pick a custom user icon.
                                    {% if 'gif' in account_data['ValidIconsExtensions'] %}
                                    <span class="text-success"> Note: You can pick a gif! :D </span>
                                    {% else %}
                                    <br>
                                    <span class="text-warning">*If you want a custom gif you can purchase the option in the
                                        store later.</span>
                                    {% endif %}
                                </small>
                            </div>
                        </div>

                        <button type="button" class="btn btn-danger" onclick="location.href = '/'">
                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-backspace"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6.603 2h7.08a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-7.08a1 1 0 0 1-.76-.35L1 8l4.844-5.65A1 1 0 0 1 6.603 2zm7.08-1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08z" />
                                <path fill-rule="evenodd"
                                    d="M5.83 5.146a.5.5 0 0 0 0 .708l5 5a.5.5 0 0 0 .707-.708l-5-5a.5.5 0 0 0-.708 0z" />
                                <path fill-rule="evenodd"
                                    d="M11.537 5.146a.5.5 0 0 1 0 .708l-5 5a.5.5 0 0 1-.708-.708l5-5a.5.5 0 0 1 .707 0z" />
                            </svg> Cancel
                        </button>
                        <button type="submit" class="btn btn-warning">
                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-box-arrow-in-right"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8.146 11.354a.5.5 0 0 1 0-.708L10.793 8 8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z" />
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 1 8z" />
                                <path fill-rule="evenodd"
                                    d="M13.5 14.5A1.5 1.5 0 0 0 15 13V3a1.5 1.5 0 0 0-1.5-1.5h-8A1.5 1.5 0 0 0 4 3v1.5a.5.5 0 0 0 1 0V3a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5h-8A.5.5 0 0 1 5 13v-1.5a.5.5 0 0 0-1 0V13a1.5 1.5 0 0 0 1.5 1.5h8z" />
                            </svg> Update
                        </button>
                        <br><br>
                    </form>
                </blockquote>
                <br><br>
                <a class="text-danger h3" href="/logout">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-left" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.354 11.354a.5.5 0 0 0 0-.708L1.707 8l2.647-2.646a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z" />
                        <path fill-rule="evenodd" d="M11.5 8a.5.5 0 0 0-.5-.5H2a.5.5 0 0 0 0 1h9a.5.5 0 0 0 .5-.5z" />
                        <path fill-rule="evenodd"
                            d="M14 13.5a1.5 1.5 0 0 0 1.5-1.5V4A1.5 1.5 0 0 0 14 2.5H7A1.5 1.5 0 0 0 5.5 4v1.5a.5.5 0 0 0 1 0V4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5H7a.5.5 0 0 1-.5-.5v-1.5a.5.5 0 0 0-1 0V12A1.5 1.5 0 0 0 7 13.5h7z" />
                    </svg>Log Out
                </a>
                <br><br>
                {% endif %}

            </div>
        </blockquote>
    </div>
</div>
<footer id="down"></footer>

<?php endblock(); ?>