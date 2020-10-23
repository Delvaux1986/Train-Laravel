@include('include/header')
<!doctype html>
    <html lang="{{ app()->getLocale() }}">
    

    <body class="bg-dark">
        <section class="">  
                <article class="secondBox container-md mt-5 mb-5 col-md-8 offset-md-2">                
                    <h2 class="mt-5">Hangman </h2>
                            <p>Un pendu réalisé en Javascript</p>
                                <img src={{asset('img/hangman.gif')}} alt="Pendu">
                                    <blockquote>
                                    <p>Réalisé en Javascript Vanilla et Bootstrap</p>
                                    </blockquote>
                        
                        <button class="btn btn-info mb-3 "><a href="./Assets/hangman/hangman.php" class="text-light">Mon Hangman</a></button>
                </article>
            </section >
                <article class="secondBox container-md mt-5 mb-5 col-md-8 offset-md-2">
                    <h2 class="mt-5">hackers-poulette</h2>
                        <section class="pouletteSection container-md">
                            <p>Projet hackers-Poulette PHP SQL</p>
                                <img src={{asset('img/logo.png')}} alt="Logo hackers-poulette">
                                <blockquote>
                                <p>Projet Solo pour Becode</p>
                                </blockquote>
                            <button class="btn btn-info mb-3 text-light"><a href="./Assets/hackers-poulette/index.php"  class="text-light">Hackers poulette</a></button> 
                        </section>
                </article>
                <article class="secondBox container-md mt-5 mb-5 col-md-8 offset-md-2">
                    <h2 class="mt-5">Chat IRT(in real time) Node.js</h2>
                        <section class="pouletteSection container-md">
                            <p>Un chat réalisé en node.js et mongoDB</p>
                                <img src="https://github.com/Delvaux1986/Chat/raw/Dev/assets/img/chat.gif" alt="The Becode Chat">
                                <blockquote>
                                <p>Projet de group</p>
                                </blockquote>
                            <button class="btn btn-info mb-3 text-light"><a href="https://becodechallenge.herokuapp.com/"  class="text-light">The Becode Chat !!!</a></button> 
                        </section>
                </article>
                <article class="secondBox container-md mt-5 mb-5 col-md-8 offset-md-2">
                    <h2 class="mt-5">Projet de grp (Almost finish)</H2>
                        <section class="pouletteSection container-md">
                            <p>Une application de comptabilité</p>
                                <img src={{asset('img/cogip.gif')}} alt="Cogip App">
                                <blockquote>
                                <p>Projet de grp</p>
                                </blockquote>
                            <button class="btn btn-info mb-3 text-light"><a href="./Assets/COGIP-app/Home/index"  class="text-light">Cogip App</a></button> 
                        </section>
                    </article>
    </body>
    @include('include/footer')

</html>