let ourTotal = document.querySelector(".totalEstimated");
// facebook calculator
    let fbRange  = document.querySelector("#fbRange");
    let fbPosts  = document.querySelector(".fb-new-range");
    let fbResult = document.querySelector('.fb-range-price');

    // twitter calculator
    let twRange  = document.querySelector("#tw-range");
    let twPosts  = document.querySelector(".tw-new-range");
    let twResult = document.querySelector('.tw-range-price');

    // LinkedIn calculator
    let liRange  = document.querySelector("#li-range");
    let liPosts  = document.querySelector(".li-new-range");
    let liResult = document.querySelector('.li-range-price');

    // IG calculator
    let igRange  = document.querySelector("#ig-range");
    let igPosts  = document.querySelector(".ig-new-range");
    let igResult = document.querySelector('.ig-range-price');

        

    fbRange.addEventListener("change", (e)=>{
        fbPosts.textContent = fbRange.value;
        fbResult.textContent = fbRange.value * 120;
            finalResult();
    });

    twRange.addEventListener("change", (e)=>{
        twPosts.textContent = twRange.value;
        twResult.textContent = twRange.value * 120;
            finalResult();
    });

    liRange.addEventListener("change", (e)=>{
        liPosts.textContent = liRange.value;
        liResult.textContent = liRange.value * 120;
            finalResult();
    });

    igRange.addEventListener("change", (e)=>{
        igPosts.textContent = igRange.value;
        igResult.textContent = igRange.value * 120;
            finalResult();
    });

    let finalResult = ()=>{
        let fb_ = fbResult.textContent
        let tw_ = twResult.textContent
        let li_ = liResult.textContent
        let ig_ = igResult.textContent
        ourTotal.textContent = parseInt(fb_) + parseInt(tw_) + parseInt(li_) + parseInt(ig_);
    }
