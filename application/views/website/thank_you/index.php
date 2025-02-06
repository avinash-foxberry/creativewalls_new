<style>
.containers {
    padding: 50px;
    border-radius: 10px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
    position: relative;
    overflow: hidden;
    text-align: center;
}

h1 {
    font-size: 48px;
    color: #fff;
}

p {
    font-size: 24px;
    color: #fff;
}

.quote {
    font-style: italic;
    font-size: 22px;
    color: #fff;
    margin-top: 20px;
}

.btn {
    display: inline-block;
    margin-top: 30px;
    padding: 15px 30px;
    background: white;
    color: #0072ff;
    text-decoration: none;
    font-weight: bold;
    font-size: 20px;
    border-radius: 5px;
    transition: 0.3s;
}

.btn:hover {
    background: #005bb5;
    color: white;
}


 /* CSS animation for SVG container */
 @keyframes pulse {
      0% { transform: scale(1); }
      50% { transform: scale(1.1); }
      100% { transform: scale(1); }
    }
    .animated-svg {
      animation: pulse 2s infinite;
      width: 100px;
      height: 100px;
      margin: 20px auto;
    }
</style>
<div class="container-fluid offer-section-row">
    <div class="row">
        <div class="col-md-12 offer-section-col">
            <div class="offer-section-main">
                <div class="containers">
                    <h1>Thank You!</h1>
                    <p>We appreciate your enquiry. Our team will get back to you within a few hours.</p>

                    <p class="quote">"Great things come to those who wait. Stay patient and trust the process."</p>
                    <a href="/" class="btn">Go Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
