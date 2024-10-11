@props([
    'active',     
])

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand d-flex flex-nowrap" href="#">
            <img src="{{ asset('images/SignoTech.webp') }}"  height="30" alt="">
            <!-- <span class="mx-2">PS-GuilhermeCasagrande</span> -->
        </a>
        <span>
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <a class="nav-link {{ $active == 'welcome' ? 'active' : ''}}" href="/">Home</a>
                    <a class="nav-link {{ $active == 'view' ? 'active' : ''}}" href="/poll">Enquetes</a>
                    <a class="nav-link {{ $active == 'create' ? 'active' : ''}}" href="/poll/create">Create</a>
                </div>
            </div>
        </span>
        
    </div>
</nav>