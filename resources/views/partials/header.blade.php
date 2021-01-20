<header>
    <section id='app'>
        <h2>Our bikes app</h2>
        <ul>
            <li v-for="bike in bikes">
                <h3>@{{bike.modello}}</h3>
                <div class="brand">@{{bike.marca}}</div>
                <div class="plate">@{{bike.targa}}</div>
            </li>
        </ul>
    </section>
</header>