<form class="row" id="contactForm" method="POST">
    <?php // name ?>
    <div class="col-md-6 form-group">
        <input class="form-control" type="text" placeholder="Name" name="name" id="name" />
        <div class="nameErr text-danger mt-2"></div>
    </div>

    <?php // email ?>
    <div class="col-md-6 form-group">
        <input class="form-control" type="email" placeholder="Email" name="email" id="email" />
        <div class="emailErr text-danger mt-2"></div>
    </div>

    <?php // services ?>
    <div class="col-md-6 form-group">
        <select class="form-control" name="services" id="services">
            <option value="0" selected disabled>Select Technical</option>
            <option value="GitHub">GitHub</option>
            <option value="Mongo DB">Mongo DB</option>
            <option value="Postgre SQL">Postgre SQL</option>
            <option value="Redis">Redis</option>
            <option value="Elastic">Elastic</option>
            <option value="Hashicorp">Hashicorp</option>
            <option value="Couchbase">Couchbase</option>
            <option value="Datastax">Datastax</option>
        </select>
        <div class="servicesErr text-danger mt-2"></div>
    </div>

    <?php // subject ?>
    <div class="col-md-6 form-group">
        <input class="form-control" type="text" placeholder="Subject" name="subject" id="subject" />
        <div class="subjectErr text-danger mt-2"></div>
    </div>

    <?php // message ?>
    <div class="col-md-12 form-group">
        <textarea class="form-control" name="message" id="message" rows="2" placeholder="Your Message"></textarea>
        <div class="messageErr text-danger mt-2"></div>
    </div>

    <input type="hidden" name="dtxf">
    <input type="hidden" name="page_title" value="<?php echo $page_title ?>">
    <input type="hidden" name="page_link" value="<?php echo $page_link ?>">

    <?php // button ?>
    <div class="col-md-12 form-group">
        <button type="submit" class="button anim">
            <div class="img-box circle">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/circle.svg" alt="Icon Circle">
            </div>
            <div class="img-box arrow">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/circle-arrow.svg" alt="Icon Circle">
            </div>
            <span>SEND MESSAGE</span>
        </button>
    </div>
</form>

<div class="outputMessage"></div>