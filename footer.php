<!-- start footer -->
<style>
    .container-fluide {

        background-color: #121212;
        margin-top: 50px;
        /* color: rgb(255, 0, 0); */
        display: flex;
        flex-direction: column;
        /* height: 400px; */
    }

    .footer-flex {
        gap: 10px;
        max-width: 1300px;
        display: flex;
        padding: 10px;
        margin: 0px auto;



    }

    .Name {
        background-color: whitesmoke;
        box-shadow: 2px 2px 5px rgb(84, 73, 73);
        font-size: xx-large;
        font-weight: 600;
        /* color: rgb(255, 0, 0); */
        padding: 10px 0px;
        text-align: center;
    }

    .about-footer {

        color: white;
        flex-grow: 1;
        flex-basis: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 20px;
        line-height: 2;


    }

    .services {

        color: white;
        flex-grow: 1;
        flex-basis: 50%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 20px;
        line-height: 2;

    }

    .services li,
    .contact li {
        list-style: none;
        padding-left: 0px;
        color: rgba(19, 110, 255, 0.768);
    }

    .services ul,
    .contact ul {
        list-style: none;
        padding: 0px;
    }

    .contact {

        color: white;
        flex-grow: 1;
        flex-basis: 60%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 20px;
        line-height: 2;




    }
</style>

<footer class="container-fluide bg-dark">

    <div class="Name">Vintege Book Store</div>
    <div class="footer-flex">
        <div class="about-footer">
            <h3 style="margin-bottom: 10px;">About</h3>
            <p>Established in 1969 and after serving multiple generations, Vintage Books has built itself to become a household brand in Karachi. A trusted name in the industry of books, stationary, uniforms and other essentials.

                With over 150 international and local brands, Vintage Books let’s you explore not only the high-end stationary but also regular office supplies, gifts for all ages, toys and schooling necessities.

                Customers are the top most priority at Vintage Books. Our focus and attention towards our customers and their satisfaction has made us the brand we are today. We strive to serve our customers and the community in a better way, every day.

                .</p>
        </div>

        <div class="services">
            <h3 style="margin-bottom: 20px;">Links</h3>
            <ul>
                <li><a href="index.php" style="text-decoration: none;">HOME </a></li>
                <li><a href="Contact.php" style="text-decoration: none;">CONTACT US</a></li>
                <li> <a href="shop.php" style="text-decoration: none;">SHOP</a></li>
                <li> <a href="profile.php" style="text-decoration: none;">PROFILE</a></li>
            </ul>
        </div>

        <div class="contact">
            <h3 style="margin-bottom: 10px;">Contact</h3>

            <ul>
                <li> Address :<p style="color: white;">Aptech Shahrah e Faisal Center Address: Suite#202, 2nd Floor, Prograssive Center, Block#6, P.E.C.H.S, Main Shahrah-e-Faisal.
                    </p>
                </li>
                <li>Phone :<p style="color: white;"> 12345678901 </p>
                </li>
                <li>Email :<p style="color: white;"> something@gmail.com </p>
                </li>

            </ul>

        </div>
    </div>

    <div class="Copyright">
        <p>&copy; Copyright Reserved Aptech Shahrah e Faisal </p>
    </div>

</footer>

<!-- end footer -->