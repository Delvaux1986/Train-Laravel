
@include('include/header')

<h2 class="mb-2 mt-2 text-center">Mon Chat réalisé en PHP(laravel8)</h2>
    <form class="minichat mt-5" action="{{route('message.store')}}" method="post" align="center">   
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" name="pseudo" id="pseudo" class="form-control rounded" placeholder="Votre pseudo"/><br/><br/>
            <input type="text" name="msgchat" id="msgchat" rows="6" cols="60" class="form-control rounded" placeholder="Votre message"><br/><br>
        <input type="submit" value="Envoyer" class="btn btn-info"/>
    </form>

    <div class="div_chat container-md col-md-8 offset-md-2 bg-dark">
        <?php 
            foreach ($messages as $msg): ?>
            <p class="text-center text-danger "><?php echo $msg->pseudo;?> :<span class="text-light text-center">  <?php echo $msg->msgchat; ?></span></p>
            <?php endforeach; ?>
            
        
        </div>    


@include('include/footer')

