<form class="form-contact" method="post">
    
    <div class="row column-reverse column-lg-normal">
        <div class="col-12 col-lg-6">
            <div class="form-group">
                <label for="name" class="form-label fw-medium">First name</label>
                <input type="text" name="name" class="form-control" placeholder="Jane" required>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="form-group">
                <label for="surname" class="form-label">Last name</label>
                <input type="text" name="surname" class="form-control" placeholder="Smitherton" required>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="email" class="form-label fw-medium">Email address</label>
                <input name="email" class="form-control" placeholder="email@janesfakedomain.net" required>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="phone" class="form-label fw-medium">Number</label>
                <input id="intlTel" type="tel" name="phone" placeholder="+380-ХХ-ХХ-ХХ-ХХХ" class="form-control intlTel" required>
            </div>
        </div>
        
        <div class="col-12">
            <div class="form-group">
                <label for="message" class="form-label fw-medium">Your message</label>
                <textarea class="form-control" name="message" rows="5" placeholder="Enter your question or message"  required></textarea>
            </div>
        </div>
        
        <div class="col-12">
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </div>
    </div>
</form>