@extends('welcome')

@section('content')
    <form class="minichat" action="{{url('message')}}" method="post" align="center">
        <input type="text" name="pseudo" id="pseudo" class="form-control rounded" placeholder="Votre pseudo"/><br/><br/>
        <input type="text" name="msgchat" id="msgchat" rows="6" cols="60" class="form-control rounded" placeholder="Votre message"><br/><br>
        <input type="submit" value="Envoyer" />
    </form>
@endSection
    <div class="div_chat container-md">
        <?php 
            foreach ($messages as $msg)
            {
                var_dump($msg);
            }
        
        ?></div>    
</div>
@include('include/footer')