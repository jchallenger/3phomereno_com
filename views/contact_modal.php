<!-- Contact Modal -->
<div id="contactModal" class="reveal-modal" data-reveal>
    <div class="row">
        <h1>Send Us A Message...</h1>
        <form name="contactForm" class="clamp-bottom">
            <div class="row collapse">
                <div class="small-2 columns">
                    <label for="name" class="prefix">From: </label>
                </div>
                <div class="small-10 columns">
                    <input type="text" id="name" name="name" required />
                </div>
            </div>
            
                
            <div class="row collapse">
                <div class="small-6 columns">
                    <div class="row collapse">
                        <div class="small-4 columns">
                            <label for="eMail" class="prefix">E-Mail: </label>
                        </div>
                        <div class="small-8 columns">
                            <input type="email" id="eMail" name="email" required />
                        </div>
                    </div>
                </div>
            
                <div class="small-5 columns">
                    <div class="row collapse">
                        <div class="small-4 columns">
                            <label for="number" class="prefix">Phone: </label>
                        </div>
                        <div class="small-8 columns">
                            <input type="text" id="number" name="number" required />
                        </div>
                    </div>
                </div>
            </div>
            
            
            <textarea name="message" rows=5 style="max-width: 100%; " placeholder="Leave us a detailed message here..." ></textarea>
            
            <input name="date_of_birth" id="honey" type='text' autofill="off" style="display: none" placeholder="Leave this blank..." />
            <input type="button" class="button expand small clamp-bottom" value="Send Us A Message!" name="contactForm" onclick="submitMessage()"/>
        </form>
    </div>
    <hr>
    <div class="row">
        <h2 class="text-center">...Or Call Today!</h2>
        <div class="text-center header-contact-number">
            <a
                href="tel:<?= $this->config('phone'); ?>">
                <?= $this->config('phone'); ?>
            </a>
        </div>
    </div>
    <a class="close-reveal-modal">&#215;</a>
</div>
