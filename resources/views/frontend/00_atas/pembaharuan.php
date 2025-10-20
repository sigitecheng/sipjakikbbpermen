<style>
/* Base Styles */
#sec-6 {
    background-color: #333;
    color: white;
    padding: 40px 0;
}

#sec-6 .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

#sec-6 .row {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -15px;
}

/* About Section */
#sec-6 .about {
    padding: 0 15px;
    margin-bottom: 30px;
}

#sec-6 .logo-section {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}

#sec-6 .logo-img {
    width: 50px;
    height: 50px;
    object-fit: cover;
    margin-right: 10px;
}

#sec-6 .sipjaki-logo {
    width: 58px;
    height: 58px;
}

#sec-6 .title-section {
    margin-bottom: 20px;
}

#sec-6 .brand-title {
    margin: 0;
    font-size: 24px;
    font-weight: bold;
}

#sec-6 .brand-highlight {
    color: white;
}

#sec-6 .institution-name {
    margin: 0;
    font-size: 16px;
    color: white;
}

#sec-6 .description-section p {
    text-align: left;
    line-height: 1.6;
}

/* Contact Section */
#sec-6 .contact {
    padding: 0 15px;
}

#sec-6 .contact-title {
    color: yellow;
    margin-bottom: 20px;
    font-size: 24px;
}

#sec-6 .map-container {
    width: 100%;
    margin-bottom: 15px;
}

#sec-6 .contact-info p {
    margin-bottom: 10px;
    text-align: left;
}

#sec-6 .contact-link a {
    color: white;
    text-decoration: none;
}

#sec-6 .contact-phone a {
    color: white;
    text-decoration: none;
}

#sec-6 .contact-address {
    font-size: 14px;
}

/* Responsive Styles */
@media (max-width: 767px) {
    #sec-6 .about,
    #sec-6 .contact {
        flex: 0 0 100%;
        max-width: 100%;
    }

    #sec-6 .logo-section {
        justify-content: center;
    }

    #sec-6 .title-section {
        text-align: center;
    }

    #sec-6 .description-section p {
        text-align: justify;
    }

    #sec-6 .contact-title {
        text-align: center;
    }

    #sec-6 .contact-info {
        text-align: center;
    }

    #sec-6 .contact-info p {
        text-align: center;
    }
}

@media (min-width: 768px) and (max-width: 991px) {
    #sec-6 .about {
        flex: 0 0 58.333333%;
        max-width: 58.333333%;
    }

    #sec-6 .contact {
        flex: 0 0 41.666667%;
        max-width: 41.666667%;
    }
}

@media (min-width: 992px) {
    #sec-6 .about {
        flex: 0 0 66.666667%;
        max-width: 66.666667%;
    }

    #sec-6 .contact {
        flex: 0 0 33.333333%;
        max-width: 33.333333%;
    }
}


        /* Main Content Area */
        .main-content {
            flex: 1;
            padding: 2rem;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }

        /* Footer Section */
        .footer-section {
            height: 8vh;
            min-height: 60px;
            background: #ffd100;
            color: #ecf0f1;
            width: 100%;
            border-top: 3px solid #3498db;
        }

        .footer-container {
            height: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .footer-content {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .footer-logos {
            margin-bottom: 0.25rem;
        }

        .footer-logo {
            vertical-align: middle;
        }

        .main-logo {
            height: 35px;
        }

        .additional-logos {
            display: inline-flex;
            gap: 0.75rem;
            align-items: center;
        }

        .secondary-logo {
            height: 30px;
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }

        .secondary-logo:hover {
            opacity: 1;
        }

        .footer-text {
            margin: 0;
            font-size: 0.9rem;
            color: #bdc3c7;
        }

        .footer-link {
            color: #3498db;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .footer-link:hover {
            color: #1abc9c;
            text-decoration: underline;
        }

        /* Responsive Styles */

        /* Tablet */
        @media (max-width: 768px) {
            .footer-section {
                height: 7vh;
                min-height: 55px;
            }

            .footer-text {
                font-size: 0.85rem;
            }

            .main-logo {
                height: 30px;
            }

            .secondary-logo {
                height: 25px;
            }
        }

        /* Mobile */
        @media (max-width: 576px) {
            .footer-section {
                height: auto;
                min-height: 50px;
                padding: 0.5rem 0;
            }

            .footer-content {
                flex-direction: column;
                justify-content: center;
            }

            .footer-logos {
                margin-bottom: 0.2rem;
            }

            .footer-text {
                font-size: 0.8rem;
                line-height: 1.4;
            }

            .main-logo {
                height: 28px;
            }

            .secondary-logo {
                height: 22px;
            }

            .additional-logos {
                gap: 0.5rem;
            }
        }

        /* Very Small Mobile */
        @media (max-width: 400px) {
            .footer-text {
                font-size: 0.75rem;
            }

            .footer-container {
                padding: 0 0.5rem;
            }
        }

        /* Landscape Orientation */
        @media (max-height: 500px) and (orientation: landscape) {
            .footer-section {
                height: 10vh;
                min-height: 50px;
            }
        }

        /* High Resolution Screens */
        @media (min-width: 1400px) {
            .footer-container {
                max-width: 1320px;
            }
        }
    </style>



<style>
.heading-structure {
    margin-top: 10px;
    font-family: 'Lato', sans-serif;
    font-weight: 700;
    font-size: 14px;
    color: #333;
    text-transform: uppercase;
    text-align: center;
    border: 2px solid black;
    padding: 10px;
    border-radius: 25px;
    width: 500px;
    background: linear-gradient(to right, #f0f0f0, #e0e0e0);
    transition: background 0.5s ease, color 0.5s ease;
    box-sizing: border-box;
}

/* Responsive: hide heading but keep margin */
@media (max-width: 768px) {
    .responsive-hide h2 {
        display: none;
    }
}
</style>
