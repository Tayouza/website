

    <section class="banner">
        <div class="slides">
            <img src="assets/banner.jpg" alt="escritório" class="slide-single">
            <img src="assets/banner1.jpg" alt="escritório" class="slide-single">
            <img src="assets/banner2.jpg" alt="escritório" class="slide-single">
        </div>
        <div class="news">
            <h3>Qual o seu melhor e-mail?</h3>
            <form method="POST">
                <div id="sugestoes"></div>
                <input type="email" name="email" id="email" placeholder="Email..." required>
                <input type="submit" name="acaoNews" value="Cadastrar!">
            </form>
        </div>
    </section>
    <section id="sobre">
        <div class="descricao">
            <h3>Taylor Souza</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quisquam soluta corporis asperiores magni
                molestias impedit obcaecati! Blanditiis iste adipisci repellendus eligendi, nesciunt neque quis
                accusamus pariatur voluptate id deleniti? Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Tenetur ab incidunt, nulla quae culpa laudantium ipsam, voluptatibus, asperiores porro alias non atque
                quod et? Doloribus reprehenderit eos ipsam. Molestias, in!</p>
        </div>
        <div class="imgSobre">
            <img src="<?php echo INCLUDE_PATH; ?>assets/tayouza.jpg" alt="Tayouza Autor">
        </div>
    </section>
    <section class="habilidades">
        <div class="container habilidades-pacote">
            <div class="stack">
                <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48px" height="48px">
                    <path
                        d="M 3 2 L 5 20 L 11.992188 22 L 19 20 L 21 2 Z M 16.726563 10.347656 L 16.34375 16.589844 L 12.027344 18 L 7.710938 16.589844 L 7.546875 13.605469 L 9.734375 13.605469 L 9.789063 14.960938 L 12.027344 15.722656 L 14.269531 14.960938 L 14.433594 12.519531 L 9.625 12.519531 L 9.515625 10.347656 L 14.539063 10.347656 L 14.703125 8.175781 L 7.164063 8.175781 L 7 6.007813 L 17 6.007813 Z" />
                </svg>
                <h3>CSS3</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi, molestias cum voluptatum libero eos
                    recusandae deserunt repellat voluptatibus natus dolores aliquid atque ipsam amet aspernatur
                    similique dolorum quasi consequuntur deleniti.</p>
            </div>
            <div class="stack">
                <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="50px" height="50px">
                    <path
                        d="M 45.273438 2.324219 C 45.085938 2.117188 44.816406 2 44.535156 2 L 5.464844 2 C 5.183594 2 4.914063 2.117188 4.726563 2.324219 C 4.535156 2.53125 4.441406 2.808594 4.46875 3.089844 L 7.988281 42.515625 C 8.023438 42.929688 8.3125 43.273438 8.710938 43.390625 L 24.722656 47.960938 C 24.808594 47.988281 24.902344 48 24.996094 48 C 25.089844 48 25.179688 47.988281 25.269531 47.960938 L 41.292969 43.390625 C 41.691406 43.273438 41.976563 42.929688 42.015625 42.515625 L 45.53125 3.089844 C 45.558594 2.808594 45.464844 2.53125 45.273438 2.324219 Z M 36.847656 15.917969 L 18.035156 15.917969 L 18.484375 21.007813 L 36.394531 21.007813 L 35.050781 36.050781 L 24.992188 39.089844 L 24.894531 39.058594 L 14.953125 36.046875 L 14.410156 29.917969 L 19.28125 29.917969 L 19.492188 32.296875 L 25.050781 33.460938 L 30.507813 32.296875 L 31.089844 25.859375 L 14.046875 25.859375 L 12.722656 11.054688 L 37.28125 11.054688 Z" />
                </svg>
                <h3>HTML5</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi, molestias cum voluptatum libero eos
                    recusandae deserunt repellat voluptatibus natus dolores aliquid atque ipsam amet aspernatur
                    similique dolorum quasi consequuntur deleniti.</p>
            </div>
            <div class="stack">
                <?xml version="1.0"?><svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"
                    width="50px" height="50px">
                    <path
                        d="M45.274,2.325C45.084,2.118,44.817,2,44.536,2H5.464C5.183,2,4.916,2.118,4.726,2.325S4.443,2.81,4.468,3.089l3.52,39.427 c0.037,0.412,0.324,0.759,0.722,0.873l16.01,4.573C24.809,47.987,24.902,48,24.994,48s0.185-0.013,0.274-0.038l16.024-4.573 c0.398-0.114,0.685-0.461,0.722-0.873l3.518-39.427C45.557,2.81,45.463,2.532,45.274,2.325z M12,29.004l7,1.942V11h4v26l-11-3.051 V29.004z M38.054,22L37,34.25L27,37v-4.601l6.75-1.855l0.25-3.75L27,28V11h12l-0.345,4H31v8L38.054,22z" />
                </svg>
                <h3>JavaScript</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi, molestias cum voluptatum libero eos
                    recusandae deserunt repellat voluptatibus natus dolores aliquid atque ipsam amet aspernatur
                    similique dolorum quasi consequuntur deleniti.</p>
            </div>
        </div>
    </section>
    <section class="depoEServicos">
        <div class="container pacote">
            <div class="depoimentos">
                <h3>Depoimentos dos nossos clientes</h3>
                <div class="depo">
                    <cite>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non consequuntur consequatur ipsam
                        hic,
                        dicta nulla placeat rerum eius natus suscipit, sunt iure vel necessitatibus unde id, optio ea
                        asperiores dolorum? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio voluptate,
                        delectus cumque impedit explicabo cum corrupti itaque odit quod, beatae commodi aut facere
                        laborum
                        molestiae quo quasi numquam inventore eius!</cite>
                    <p><strong>Lorem Ipsum</strong></p>
                </div>
                <div class="depo">
                    <cite>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non consequuntur consequatur ipsam
                        hic,
                        dicta nulla placeat rerum eius natus suscipit, sunt iure vel necessitatibus unde id, optio ea
                        asperiores dolorum? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio voluptate,
                        delectus cumque impedit explicabo cum corrupti itaque odit quod, beatae commodi aut facere
                        laborum
                        molestiae quo quasi numquam inventore eius!</cite>
                    <p><strong>Lorem Ipsum</strong></p>
                </div>
                <div class="depo">
                    <cite>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non consequuntur consequatur ipsam
                        hic,
                        dicta nulla placeat rerum eius natus suscipit, sunt iure vel necessitatibus unde id, optio ea
                        asperiores dolorum? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio voluptate,
                        delectus cumque impedit explicabo cum corrupti itaque odit quod, beatae commodi aut facere
                        laborum
                        molestiae quo quasi numquam inventore eius!</cite>
                    <p><strong>Lorem Ipsum</strong></p>
                </div>
            </div>
            <div id="servicos">
                <h3>Serviços</h3>
                <ul>
                    <li>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis totam magnam iste
                            necessitatibus! Quas reprehenderit illum omnis, corrupti explicabo non! Iure placeat ducimus
                            suscipit cupiditate, necessitatibus deserunt debitis eligendi expedita.</p>
                    </li>
                    <li>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis totam magnam iste
                            necessitatibus! Quas reprehenderit illum omnis, corrupti explicabo non! Iure placeat ducimus
                            suscipit cupiditate, necessitatibus deserunt debitis eligendi expedita.</p>
                    </li>
                    <li>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis totam magnam iste
                            necessitatibus! Quas reprehenderit illum omnis, corrupti explicabo non! Iure placeat ducimus
                            suscipit cupiditate, necessitatibus deserunt debitis eligendi expedita.</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>  