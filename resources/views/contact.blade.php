@include('include/header')
<div align="center" class="inputcontact col-md-8 offset-md-2">
            <h2 class="mb-3"><span><ins>Contact Me</ins></span></h2>

            <form  method="post" action="">   
                <input name="name" id="nom" required="require" placeholder="Enter your lastname"/><br/>
                    <input name="prenom" id="prenom" required="require" placeholder="Enter your firstname"/><br/>
                        <input name="mail" id="email" required="require" placeholder="Enter your E-mail"/><br/>
                    <textarea name="msg" id="msg" rows="6" cols="40" placeholder="Enter your message there" class="mb-3"></textarea>
                <br>
                <input type="submit" value="submit" class="submit btn btn-info mb-5" />
            </form>
                <p class='confirm_contact'></p>
        </div>

@include('include/footer')