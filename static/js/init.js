    /*
    Роли пользователей
    * 0 - посетитель
    * 1 - инспектор
    * 2 - администратор
    * 3 - полный доступ
    */

    /*
    Статусы пользователей
    * 0 - клиент
    * 1 - лицензиар
    * 2 - блогер
    * 3 - администратор
    */

    let cartCount = -1;

    var timer = null;
    let supervisorActionsCount = 0;
    var cancelForm = false;
    var id = 0;
    var step = 1;
    let multipleImagesCount = {};
    let maxImagesCount = {};
    const loadImageParams = {maxHeight: 101, maxWidth: 101, contain: true, crop: true};
    let customizationI = 0;
    var tokenToName = {};
    var selectedCartStep = 1;
    var goodCount = 0;
    var interval = [];
    var loaderOpacity = 0;

    var goodsData = null;
    var sectionsData = null;
    var cartForm = $(".main__main__inner");
    var inner = $(".cart__inner");
    var inputTimer = 0;
    var shouldWriteInHistory = true;
    var userId = "";
    var orderId = "";

    $.easing.def = 'easeInOutQuad';

    function pad(num, size) {
    num = num.toString();
    while (num.length < size) num = "0" + num;
    return num;
}

    function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') c = c.substring(1, c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
}
    return "";
}

    function setCookie(name, value, days) {
    var expires = "";
    if (days) {
    var date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    expires = "; expires=" + date.toUTCString();
}
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

    (function (elmProto) {
    if ('scrollTopMax' in elmProto) {
    return;
}
    Object.defineProperties(elmProto, {
    'scrollTopMax': {
    get: function scrollTopMax() {
    return this.scrollHeight - this.clientHeight;
}
},
    'scrollLeftMax': {
    get: function scrollLeftMax() {
    return this.scrollWidth - this.clientWidth;
}
}
});
}
    )(Element.prototype);

    function inputDelay(fn, ms) {
    inputTimer = 0;
    return function (...args) {
    clearTimeout(inputTimer)
    inputTimer = setTimeout(fn.bind(this, ...args), ms || 0)
}
}

    (function ($) {

    $.fn.bindWithDelay = function (type, data, fn, timeout, throttle) {

        if ($.isFunction(data)) {
            throttle = timeout;
            timeout = fn;
            fn = data;
            data = undefined;
        }

        // Allow delayed function to be removed with fn in unbind function
        fn.guid = fn.guid || ($.guid && $.guid++);

        // Bind each separately so that each element has its own delay
        return this.each(function () {

            var wait = null;

            function cb() {
                var e = $.extend(true, {}, arguments[0]);
                var ctx = this;
                var throttler = function () {
                    wait = null;
                    fn.apply(ctx, [e]);
                };

                if (!throttle) {
                    clearTimeout(wait);
                    wait = null;
                }
                if (!wait) {
                    wait = setTimeout(throttler, timeout);
                }
            }

            cb.guid = fn.guid;

            $(this).bind(type, data, cb);
        });
    };

})(jQuery);

    function appendInput(element, input, labelType = "static", extClass = "", autocomplete = "off") {
    const type = input.type;
    const newEl = append(element, new div(e.div, extClass).id(input.name).html());

    let result = null;

    switch (labelType) {
    case positions.up:
    result = append($(newEl), new div(e.p, "label rotonda-default").html(input.placeholder)
    + new div(e.input, 'rounded rotonda-default').attr({
    'readable-input-description': input.readableInputDescription,
    'readable-input-position': input.readableInputPosition,
    'autocomplete': autocomplete,
    'style': input.styleString,
    'value': input.value,
    'input-type': 'up',
    'name': input.name,
    'type': type
}).html()
    + new div(e.p, 'label rotonda-default errored').html("Ошибка"));
    break;
    case positions.static:
    result = append($(newEl), new div(e.input).cl('rounded rotonda-default')
    .attr({
    'readable-input-description': input.readableInputDescription,
    'readable-input-position': input.readableInputPosition,
    'autocomplete': autocomplete,
    'style': input.styleString,
    'value': input.value,
    'input-type': 'static',
    'name': input.name,
    'type': type,
    'placeholder': input.placeholder
}).html()
    + new div(e.p, 'label rotonda-default errored').html("Ошибка"));
    break;
    case positions.float:
    result = append($(newEl), new div(e.div).html(
    new div(e.label, "inp").attr({"for": input.name}).html(
    new div(e.input, 'rounded').attr({
    'id': input.id,
    'readable-input-description': input.readableInputDescription,
    'readable-input-position': input.readableInputPosition,
    'autocomplete': autocomplete,
    'style': input.styleString,
    'value': input.value,
    'input-type': 'float',
    'name': input.name,
    'type': type,
    'placeholder': '&nbsp;'
}).html() +
    new div(e.span, "label").html(input.placeholder) +
    new div(e.span, "focus-bg").html()
    ) + new div(e.p, "label rotonda-default errored errored__float").st({"transform": "translate(0px, 3px)"}).html('Ошибка')
    )
    );
    break;
    case positions.hidden:
    result = append($(newEl), new div(e.input, "rounded rotonda-default").attr({
    'autocomplete': autocomplete,
    'id': input.id,
    'style': input.styleString,
    'value': input.value,
    'input-type': 'float',
    'name': input.name,
    'type': type,
    'placeholder': '&nbsp;'
}).html());
    break;
}

    return result;
}

    function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1).toLowerCase();
}

    function appendTextarea(element, input, extClass = "") {
    const type = input.type;
    const newEl = append(element, new div(e.div, extClass).id(input.name).html());

    $(newEl).append(new div(e.p, "label rotonda-default ").html(input.placeholder)
    + new div("textarea", 'rounded rotonda-default ').attr({
    'readable-input-description': input.readableInputDescription,
    'readable-input-position': input.readableInputPosition,
    'autocomplete': 'off',
    'value': input.value,
    'input-type': 'up',
    'name': input.name,
    'type': type
}).st('resize', 'none').html(input.value)
    + new div(e.p, 'label rotonda-default errored').html("Ошибка"));

    $(newEl).find('textarea').each(function () {
    this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;resize:none;');
}).on('input', function () {
    this.style.height = 'auto';
    this.style.height = (this.scrollHeight) + 'px';
});
}

    function imageExists(url, callback) {
    const img = new Image();
    img.onload = function () {
    callback(true);
};
    img.onerror = function () {
    callback(false);
};
    img.src = url;
}

    function appendMultipleImageInput(element, input, headerText = "Главная галерея фотографий", galleryName = "gallery", maxImages = 0, data = []) {
    maxImagesCount[headerText] = maxImages;
    multipleImagesCount[headerText] = 0;

    element.append(new div(e.p).st("font-size", "1.4em").html(headerText));
    const randomDiv2 = addInfiniteDiv(element);
    const randomDiv3 = addDiv(randomDiv2);
    randomDiv3.toggleClass('infinite__element__outer');
    const randomDiv = addDiv(randomDiv3);
    randomDiv.toggleClass('infinite__element__inner');
    appendInput(randomDiv, input, positions.hidden);


    randomDiv.append(new div(e.div, 'image__upload').st({border: '5px #05a8ec dashed', opacity: '0.9'}).html(
    new div(e.div, 'image__display').st("display", "contents").html(
    new div(e.input).st("z-index", 10000).attr({
    multiple: "multiple",
    accept: 'image/x-png,image/gif,image/jpeg',
    'type': 'file'
}).html() +
    new div(e.div).st("pointer-events", "none").html(
    new div(e.div, 'infinite__element__image always__visible').id('uploaded-img').st({
    'background-image': 'url(../assets/svg/add.svg)',
    'background-size': '60%;height:100%;',
    'background-repeat': 'no-repeat',
    'background-position': 'center'
}).html()
    )
    )
    ));

    for (let ii = 0, len = data.length; ii < len; ii++) {
    const piece = data[ii];
    let file = piece['image-url'];
    appendImage(headerText, randomDiv3, file, randomDiv2, input, galleryName);
}

    randomDiv.find(".image__display").find('input').on('change', {randomDiv: randomDiv}, function () {
    let randomDiv8;
    for (let i = 0; i < this.files.length; i++) {
    let file = this.files[i];
    randomDiv8 = appendImage(headerText, randomDiv3, file, randomDiv2, input, galleryName);

    uploadImage(file, randomDiv8.find(".uploaded__input"));
}
});

}

    function appendImage(headerText, randomDiv3, file, randomDiv2, input, galleryName) {
    if (multipleImagesCount[headerText] < maxImagesCount[headerText] || maxImagesCount[headerText] === 0) {
    multipleImagesCount[headerText]++;

    if (multipleImagesCount[headerText] >= maxImagesCount[headerText] && maxImagesCount[headerText] !== 0) {
    randomDiv3.css('opacity', '0.6');
    randomDiv3.css('pointer-events', 'none');
}


    let id = randomString();
    $(randomDiv2).children().last().before(new div(elements.div).id(id).html());

    let randomDiv4 = $("#" + id);
    randomDiv4.toggleClass('infinite__element__outer');
    randomDiv4.css('transition', '0.3s all ease;');

    append(randomDiv4, new div(e.div, 'delete').html()).click(function () {
    multipleImagesCount[headerText]--;

    if (multipleImagesCount[headerText] < maxImagesCount[headerText] || maxImagesCount[headerText] === 0) {
    randomDiv3.css('opacity', '1');
    randomDiv3.css('pointer-events', '');
}
    $(this).parent().remove();
});

    let randomDiv = addDiv(randomDiv4);
    randomDiv.toggleClass('infinite__element__inner');
    appendInput(randomDiv, input, positions.hidden);

    randomDiv.append(new div(elements.div, "image__upload").html(
    new div(elements.input, 'uploaded__input').attr({
    accept: 'image/x-png,image/gif,image/jpeg',
    'type': 'file',
    'readable-input-position': galleryName,
    'readable-input-description': 'image'
}).st('z-index', '10000').html() +
    new div(elements.div, 'image__element__loading__outer').html(new div(elements.div, 'image__element__loading__inner').html()) +
    new div(elements.div, 'image__display').st('display', 'contents').html() +
    new div(elements.div, 'infinite__element__image').id('uploaded-img').html() +
    new div(elements.div, 'image__display__image').st({
    position: 'absolute',
    'z-index': '1',
    height: 'calc(100% - 1px)'
}).html()
    ));

    let g = randomDiv.find("input");
    if (typeof (file) !== "string")
    g.files = [file];
    else g.attr("readable-image-url", file);
    g.on('change', function () {
    if (this.files[0]) {
    loadImage(this.files[0], function (img) {
    let f = randomDiv.find(".image__display__image");
    f.find("canvas").remove();
    f.append(img);
}, loadImageParams);
    uploadImage(this.files[0], randomDiv.find(".uploaded__input"));
}
    return false;
});

    let leftPos = $(randomDiv2).scrollLeft();
    let dimwit = $(randomDiv2)[0].scrollWidth;
    $(randomDiv2).scrollLeft(leftPos + dimwit);
    loadImage(
    file,
    function (img) {
    let k = randomDiv.find(".image__display__image");
    k.find("canvas").remove();
    k.append(img);
},
    loadImageParams
    );

    return randomDiv;
} else {
    randomDiv3.css('opacity', '0.6');
    randomDiv3.css('pointer-events', 'none');
    return null;
}
}

    function uploadImage(file, fileInput, fileNameFunc = "") {
    fileInput.css('background', 'blue');

    let fileName = fileNameFunc;
    if (fileName === "")
    fileName = randomString() + "-" + randomString();

    const xhr = new XMLHttpRequest();
    xhr.upload.onprogress = function (event) {
    fileInput.parent().find(".image__element__loading__inner").css({
    'z-index': '1000',
    opacity: '1',
    height: (event.loaded / event.total * 100).toString() + 'px'
});
};
    xhr.onload = xhr.onerror = function () {
    if (this.status === 200) {
    const json = JSON.parse(this.responseText);
    fileInput.parent().find(".infinite__element__image").removeClass('always__visible');
    fileInput.parent().find(".image__element__loading__inner").css('opacity', '0');
    setTimeout(function () {
    fileInput.parent().find(".image__element__loading__inner").css('height', '0px');
}, 300);
    if (json.response.status === "ok") {
    imageExists(json.response.url, function () {
    fileInput.attr('readable-image-url', json.response.url);
});
} else {
    showTopPopup(this.error);
}
}
};

    xhr.open("POST", "../api/save/file", true);
    const formData = new FormData();
    formData.append("file", file);
    formData.append("imageName", fileName);
    xhr.send(formData);
}

    function appendRadio(form, title, name, sections, section) {
    var section = section;
    if (section === undefined) section = "";
    form.append(new div(elements.p).st("font-size", "1.4em").html(title));
    const ul = append(form, new div(elements.ul).html());

    let i = 0;
    let selected = "";
    for (let index in sections) {
    if (sections.hasOwnProperty(index)) {
    const radio = sections[index];
    i++;
    let idR = randomString();
    if (radio._id.$oid.toString() === section.toString()) selected = 'checked'; else selected = 'unchecked';
    ul.append(new div(elements.li, 'rotonda-default').html(new div(elements.input).attr(selected, ' ').id(idR).attr('name', name).attr('value', radio._id.$oid).attr('type', 'radio').html(new div(elements.label).attr('for', idR).html(radio.name) + new div(elements.div, 'check').html())));
}
}
}

    function logToString(logs, callback = function (result) {
}) {
    const result = [];
    const tokens = [];
    for (const logId in logs) {
    const log = logs[logId];
    if (!(log.token in tokenToName)) {
    if (!tokens.includes(log.token) && log.token !== "")
    tokens.push(log.token);
    if (!tokens.includes("undefined") && log.token === "undefined")
    tokens.push("undefined");
}
}

    APIRequest('../api/run/face', {tokens: tokens.toString()}, function (response) {
    for (const index in response.response)
    tokenToName[index] = response.response[index];

    for (const logId in logs) {
    const log = logs[logId];

    const timestamp = log.time,
    date = new Date(timestamp * 1000),
    values = [
    date.getFullYear(),
    ('0' + (date.getMonth() + 1)).slice(-2),
    ('0' + date.getDate()).slice(-2),
    ('0' + date.getHours()).slice(-2),
    ('0' + date.getMinutes()).slice(-2),
    ('0' + date.getSeconds()).slice(-2)
    ];

    result.push(`${values[0]}-${values[1]}-${values[2]}T${values[3]}:${values[4]}:${values[5]}, ${tokenToName[log.token]}: ${log.type}`);
}
    callback(result);
});

    return result;
}

    function appendCustomization(e2, data = []) {
    const id2 = randomString();
    const e = append(e2, new div(elements.div).id(id2).html());

    const id = randomString();
    e.append(new div(elements.div, 'customization customization__new').id(id).html(
    new div(elements.div, 'infinite__element__image infinite__element__grey').id('uploaded-img').html()
    ));
    const element = $("#" + id);

    let uniqueIndices = [];

    for (let ii = 0, len = data.length; ii < len; ii++) {
    const piece = data[ii];
    if (piece.inputPosition === "step" && !uniqueIndices.includes(piece.position))
    uniqueIndices.push(piece.position)
}


    for (let ii = 0, len = uniqueIndices.length; ii < len; ii++) {
    if (data !== []) {
    const returnedElement = prependNewCustomization(e, uniqueIndices[ii], data.filter(function (i) {
    if (i.position !== undefined) {
    return i.position.includes(uniqueIndices[ii].split(".")[0]);
} else return false;
}));

    Sortable.create(returnedElement.get(0), {
    animation: 300,
    easing: "cubic-bezier(0.8, 0, 0, 0.8)",
    ghostClass: 'blue-background-class'
});
}
}

    $(element).click(function () {
    prependNewCustomization(e);
});

    Sortable.create(e.get(0), {
    animation: 300,
    easing: "cubic-bezier(0.8, 0, 0, 0.8)",
    ghostClass: 'blue-background-class'
});
}

    function appendCustomizationClient(e2, data = [], onchoice = function () {
}, price) {
    const id2 = randomString();
    const e = append(e2, new div(elements.div).id(id2).html());

    const id = randomString();
    const element = $("#" + id);

    let uniqueIndices = [];

    for (let ii = 0, len = data.length; ii < len; ii++) {
    const piece = data[ii];
    if (piece.inputPosition === "step" && !uniqueIndices.includes(piece.position))
    uniqueIndices.push(piece.position)
}


    for (let ii = 0, len = uniqueIndices.length; ii < len; ii++)
    if (data !== [])
    prependNewCustomizationClient(e, uniqueIndices[ii], data.filter(function (i) {
    if (i.position !== undefined) {
    return i.position.includes(uniqueIndices[ii].split(".")[0]);
} else return false;
}), onchoice, price);
    empty($(e), 2);
    $(e).append(new div(elements.div, "g__container").html(
    new div(elements.div, 'g__image__holder').attr('tp', 'bottom').css('display', 'none !important').html(new div(elements.div, "g__image").html()) +
    new div(elements.div, "g__customization").html()
    ));
    $(e).append(new div(elements.button, 'good__button__contains').attr({
    "db-id": id,
    'type': 'submit'
}).st('width', '100%').html(new div(elements.div, "left").html("В корзину") + new div(elements.div, "right").html("+1 шт.")));
    let right = $(e).find('.right');
    right.css('width', '0px');
    right.css('padding-left', '0px');
    right.css('padding-right', '0px');

}


    function updateCartCount(callback = function () {
}) {
    APIRequest('api/get/cart', {}, function (response) {
        cartCount = response.response.count;
        placeCart();
        callback();
    });
}

    function updateCart(newVal) {
    cartCount = newVal;
    const cart = $(".cart");
    const goodSpan = cart.find("span");

    let itemsCount = parseInt(goodSpan.html());
    if (itemsCount === undefined || itemsCount === null) itemsCount = 0;
    if (itemsCount < 0) itemsCount = 0;

    if (cartCount > 0)
    cart.addClass('filled');
    if (cartCount === 0)
    cart.removeClass('filled');

    cart.css('transform', 'scale(1.2)');
    goodSpan.css('transform', 'scale(1.4)');

    setTimeout(function () {
    if (cartCount < 0)
    goodSpan.html(0); else
    goodSpan.html(cartCount);
}, 500);

    setTimeout(function () {
    cart.css('transform', 'scale(1)');
    goodSpan.css('transform', 'scale(1)');
}, 600);
}

    function filterAndGetValue(data, param, value, valueToRead = "value") {
    if (data !== []) {
    let res = data.filter(function (i) {
    return i[param] === value
});

    if (res !== undefined) if (res[0] !== undefined)
    return res[0][valueToRead];
}
}

    function filterAndGetObject(data, param, value, valueToRead = "value") {
    if (data !== []) {
    let res = data.filter(function (i) {
    return i[param][valueToRead] === value
});

    if (res !== undefined) if (res[0] !== undefined)
    return res[0];
}
}

    function filterData(data, param, value) {
    if (data !== []) {
    let res = data.filter(function (i) {
    return i[param] === value
});

    if (res !== undefined) if (res[0] !== undefined)
    return res[0];
}
}

    //Пустая форма кастомизации!!
    function prependNewCustomization(e, uniqueIndex = randomString(), data = []) {
    const id = randomString();
    e.children().last().before(new div(elements.div, 'customization readable__container').id(id).html());
    const element2 = $("#" + id);

    element2.append(new div(e.div, 'delete').html());
    element2.find(".delete").on('click', function () {
    $(this).parent().remove();
});

    const step_number = new Input("", "text");
    step_number.setPlaceholder("Порядковый номер");
    step_number.setValue(filterAndGetValue(data, "inputDescription", "number"));
    step_number.setReadableInputDescription("number");
    step_number.setReadableInputPosition("step");
    appendInput(element2, step_number, positions.up);

    const step_name = new Input("", "text");
    step_name.setPlaceholder("Название шага");
    step_name.setValue(filterAndGetValue(data, "inputDescription", "name"));
    step_name.setReadableInputDescription("name");
    step_name.setReadableInputPosition("step");
    appendInput(element2, step_name, positions.up);

    const step_description = new Input("", "text");
    step_description.setPlaceholder("Описание шага");
    step_description.setValue(filterAndGetValue(data, "inputDescription", "description"));
    step_description.setReadableInputDescription("description");
    step_description.setReadableInputPosition("step");
    appendInput(element2, step_description, positions.up);

    const step_description_short = new Input("", "text");
    step_description_short.setPlaceholder("Короткое описание шага");
    step_description_short.setValue(filterAndGetValue(data, "inputDescription", "description_short"));
    step_description_short.setReadableInputDescription("description_short");
    step_description_short.setReadableInputPosition("step");
    appendInput(element2, step_description_short, positions.up);

    const randString = randomString();
    const element = append(element2, new div(elements.div, randString).html());

    element.append(new div(elements.div, 'customization__container').id('customization-container0').html(
    new div(elements.div, 'customization__element').id('customization0').html(
    new div(elements.div, 'customization__element__right').html() +
    new div(elements.div, 'customization__element__divider').html() +
    new div(elements.div, 'customization__element__left').html()
    )
    ));

    const q = element.find("#customization-container0");
    q.css({opacity: '0.5', pointer: 'click'});
    q.click(function () {
    prependNewCustomizationElement(element, data)
});

    let customizationData = [];
    if (data !== undefined) {
    customizationData = (data).filter(function (i) {
    if (i.inputPosition !== undefined)
    return i.inputPosition.includes('customization.step');
    else return false;
})
}


    let uniqueIndices = [];

    for (let ii = 0, len = customizationData.length; ii < len; ii++) {
    const piece = customizationData[ii];
    if (piece.inputPosition === "customization.step" && !uniqueIndices.includes(piece.position))
    uniqueIndices.push(piece.position)
}


    for (let ii = 0, len = uniqueIndices.length; ii < len; ii++) {
    if (data !== [])
    prependNewCustomizationElement(element, uniqueIndices[ii], data.filter(function (i) {
    if (i.position !== undefined) {
    return i.position.includes(uniqueIndices[ii].split(".")[0] + "." + uniqueIndices[ii].split(".")[1]);
} else return false;
}));
}

    const rightForm = element.find("#customization0").find(".customization__element__right");

    const step_element_type = new Input("step_element_type", "text");
    step_element_type.setPlaceholder("Тип подэлемента");
    appendInput(rightForm, step_element_type, positions.up);

    const step_element_name = new Input("step_element_name", "text");
    step_element_name.setPlaceholder("Имя подэлемента");
    appendInput(rightForm, step_element_name, positions.up);

    const leftFormOuter = element.find("#customization0").find(".customization__element__left");
    const leftForm = addDiv(leftFormOuter);
    const leftForm2 = addDiv(leftFormOuter);

    leftForm.css('display', 'table-cell');
    leftForm2.css('display', 'table-cell');

    leftForm.append(new div(elements.div, 'delete').html());
    leftForm2.append(new div(elements.div, 'delete').html());

    const h = new div(elements.div, 'image__upload').st({
    'margin-bottom': '15px !important',
    'border': '5px #05a8ec dashed',
    'opacity': '0.9'
}).html(
    new div(elements.div, 'image__display').html(
    new div(elements.div, 'infinite__element__image always__visible').id('uploaded-img').st({
    'background-size': '60%',
    width: '100%',
    height: '100%',
    'background-repeat': 'no-repeat',
    'background-position': 'center'
}).html()
    )
    );

    leftForm.append(new div(elements.p).st({'font-size': '1em', 'display': 'inline-block'}).html('Фото выбора'));
    leftForm.append(h);

    leftForm2.append(new div(elements.p).st({'font-size': '1em', 'display': 'inline-block'}).html('Наложение'));
    leftForm2.append(h);

    element.find("#customization-container0").find("input").css('pointer-events', 'none');

    return element;
}

    //Пустая форма кастомизации!!
    function prependNewCustomizationClient(e, uniqueIndex = randomString(), data = [], onchoice = function () {
}, price) {

    const id = randomString();
    e.append(new div(elements.div, 'g__step').id(id).html());
    const element2 = $("#" + id);


    element2.append(new div(elements.p, 'rotonda-bold').st({
    'font-size': '1.6em',
    'color': '#05a8ec'
}).html(filterAndGetValue(data, "inputDescription", "name")));

    element2.append(new div(elements.p, 'rotonda-default').st('margin-top', '-20px').html(filterAndGetValue(data, "inputDescription", "description")));
    const element = append(element2, new div(elements.ul, 'customization__radio__div').html());

    if (filterAndGetValue(data, "inputDescription", "name") === "Выбери размер")
    element.css('max-width', '200px');

    if (filterAndGetValue(data, "inputDescription", "name") === "Выбери надпись")
    element.addClass('custom__title__div');

    let customizationData = [];
    if (data !== undefined) {
    customizationData = (data).filter(function (i) {
    if (i.inputPosition !== undefined)
    return i.inputPosition.includes('customization.step');
    else return false;
})
}
    let uniqueIndices = [];

    for (let ii = 0, len = customizationData.length; ii < len; ii++) {
    const piece = customizationData[ii];
    if (piece.inputPosition === "customization.step" && !uniqueIndices.includes(piece.position))
    uniqueIndices.push(piece.position)
}

    prependNewCustomizationElementClient(element, data, uniqueIndices, onchoice);

    return element;
}


    // Добавленные элементы в кастомизацию!
    function prependNewCustomizationElement(element, uniqueIndex = randomString(), data = []) {
    customizationI++;

    element.children().last().before(new div(e.div, 'readable__container customization__container').id(randomString()).html(
    new div(elements.div, 'delete').html() +
    new div(e.div, 'customization__element').id('customization' + customizationI).html(
    new div(e.div, 'customization__element__right').html() +
    new div(e.div, 'customization__element__divider').html() +
    new div(e.div, 'customization__element__left').html()
    )
    ));

    const k = $("#customization" + customizationI);
    k.parent().find(".delete").on('click', function () {
    $(this).parent().remove();
});

    const rightForm = k.find(".customization__element__right");

    const step_element_type = new Input("", "text");
    step_element_type.setPlaceholder("Тип подэлемента");
    step_element_type.setValue(filterAndGetValue(data, "inputDescription", "type"));
    step_element_type.setReadableInputDescription("type");
    step_element_type.setReadableInputPosition("customization.step");
    appendInput(rightForm, step_element_type, positions.up);

    if (step_element_type.value === "" || step_element_type.value === undefined)
    rightForm.find("input").last().focus();

    const step_element_name = new Input("", "text");
    step_element_name.setPlaceholder("Имя подэлемента");
    step_element_name.setValue(filterAndGetValue(data, "inputDescription", "name"));
    step_element_name.setReadableInputDescription("name");
    step_element_name.setReadableInputPosition("customization.step");
    appendInput(rightForm, step_element_name, positions.up);


    const leftFormOuter = k.find(".customization__element__left");
    const leftForm = addDiv(leftFormOuter);
    const leftForm2 = addDiv(leftFormOuter);

    leftForm.css('display', 'table-cell');
    leftForm2.css('display', 'table-cell');
    leftForm.addClass('customization__content');
    leftForm2.addClass('customization__content');

    let imageUrl = filterAndGetValue(data, "inputDescription", "image-choice", 'image-url');
    leftForm.append(new div(e.p).st({'font-size': '1em', 'display': 'inline-block'}).html('Фото выбора'));
    helpFunction(leftForm, (new div(e.div, 'image__upload').st('border', '5px #05a8ec dashed').html(
    new div(e.input).attr({
    'type': 'file',
    'accept': 'image/x-png,image/gif,image/jpeg',
    'readable-input-description': 'image-choice',
    'readable-input-position': 'customization.step',
    'readable-image-url': imageUrl
}).st('z-index', '10000').html() +
    new div(e.div, 'image__element__loading__outer').html(
    new div(e.div, 'image__element__loading__inner').html()) +
    new div(e.div, 'image__display').st('display', 'contents').html(
    new div(e.div, 'infinite__element__image always__visible').id('uploaded-img').html() +
    new div(e.div, 'image__display__image').st({
    position: 'absolute',
    'z-index': 1,
    height: 'calc(100% + 1px)'
}).html()
    ))));

    if (imageUrl !== undefined && imageUrl !== "" && imageUrl !== "undefined")
    loadImage(
    imageUrl,
    function (img) {
    leftForm.find(".image__display__image").find("canvas").remove();
    leftForm.find(".image__display__image").append(img);
    leftForm.find(".always__visible").removeClass("always__visible");
}, loadImageParams);

    const imageUrl2 = filterAndGetValue(data, "inputDescription", "image-display", 'image-url');
    leftForm2.append(new div(e.p).st({'font-size': '1em', 'display': 'inline-block'}).html('Наложение'));
    helpFunction(leftForm2, (new div(e.div, 'image__upload').st('border', '5px #05a8ec dashed').html(
    new div(e.input).attr({
    'type': 'file',
    'accept': 'image/x-png,image/gif,image/jpeg',
    'readable-input-description': 'image-display',
    'readable-input-position': 'customization.step',
    'readable-image-url': imageUrl2
}).st('z-index', '10000').html() +
    new div(e.div, 'image__element__loading__outer').html(
    new div(e.div, 'image__element__loading__inner').html()) +
    new div(e.div, 'image__display').st('display', 'contents').html(
    new div(e.div, 'infinite__element__image always__visible').id('uploaded-img').html() +
    new div(e.div, 'image__display__image').st({
    position: 'absolute',
    'z-index': 1,
    height: 'calc(100% + 1px)'
}).html()
    ))));
    if (imageUrl2 !== undefined && imageUrl2 !== "" && imageUrl2 !== "undefined")
    loadImage(
    imageUrl2,
    function (img) {
    leftForm2.find(".image__display__image").find("canvas").remove();
    leftForm2.find(".image__display__image").append(img);
    leftForm2.find(".always__visible").removeClass("always__visible");
}, loadImageParams);
}

    // Добавленные элементы в кастомизацию!
    function prependNewCustomizationElementClient(element, data, uniqueIndices, onchoice = function () {
}) {
    // $(element).append(new div(e.li).html(new div(e.input, 'customization__radio').attr({'type': 'radio', 'name': filterAndGetValue(data, "inputDescription", "type")}).html() + new div(e.div, 'check').html()));

    const ul = element;
    let i = 0;
    let selected = "unchecked";

    for (let ii = 0, len = uniqueIndices.length; ii < len; ii++) {
    selected = "unchecked";
    if (data !== []) {
    const currentData = data.filter(function (i) {
    if (i.position !== undefined) {
    return i.position.includes(uniqueIndices[ii].split(".")[0] + "." + uniqueIndices[ii].split(".")[1]);
} else return false;
});
    const currentIndex = uniqueIndices[ii];

    i++;
    let idR = randomString();

    let backgroundSize = 'cover';
    if (filterAndGetValue(currentData, "inputDescription", "type") === 'size') backgroundSize = 'inherit';
    if (filterAndGetValue(currentData, "inputDescription", "type") === 'size' && filterAndGetValue(currentData, "inputDescription", "name") === 'L') selected = 'checked';
    if (filterAndGetValue(currentData, "inputDescription", "type") === 'title' && filterAndGetValue(currentData, "inputDescription", "name") === 'Смысл жизни') selected = 'checked';
    if (filterAndGetValue(currentData, "inputDescription", "type") === 'title') backgroundSize = "contain";
    if (filterAndGetValue(currentData, "inputDescription", "type").includes('color') && filterAndGetValue(currentData, "inputDescription", "name") === 'белый') selected = 'checked';
    if (filterAndGetValue(currentData, "inputDescription", "type").includes('notebookColor') && filterAndGetValue(currentData, "inputDescription", "name") === 'белый') selected = 'checked';
    if (filterAndGetValue(currentData, "inputDescription", "type").includes('print') && filterAndGetValue(currentData, "inputDescription", "name") === 'скамейка') selected = 'checked';

    let classValue = "check";
    if (filterAndGetValue(currentData, "inputDescription", "type") === 'title') classValue = "check__title";


    ul.append(new div(elements.li, 'rotonda-default ' + 'li__' + classValue).html(
    new div(elements.input).attr(selected, ' ').id(idR).attr('name', filterAndGetValue(currentData, "inputDescription", "type").split('-')[0]).attr('value', filterAndGetValue(currentData, "inputDescription", "name")).attr('type', 'radio').html(
    new div(elements.label).attr('for', idR).html("") + new div(elements.div, classValue).st({
    'background-image': "url('" + filterAndGetValue(currentData, "inputDescription", "image-choice", 'image-url') + "')",
    'background-origin': 'content-box',
    'background-size': backgroundSize
}).html())));

    ul.find("#" + idR).on('change', function () {
    onchoice();
})

}
}
}

    function helpFunction(leftForm, l) {
    leftForm.append(l);
    leftForm.find("input").on('change', function () {
    if (this.files[0]) {
    loadImage(
    this.files[0],
    function (img) {
    leftForm.find(".image__display__image").find("canvas").remove();
    leftForm.find(".image__display__image").append(img);
}, loadImageParams);
    uploadImage(this.files[0], leftForm.find("input"));
}
    return false;
});
}

    function separator(element) {
    $(element).append(new div(elements.div, 'separator').html());
}

    function randomString() {
    return Math.random().toString(36).substring(7) + Math.random().toString(36).substring(7) + Math.random().toString(36).substring(7);
}

    function addDiv(form) {
    return append(form, new div("div").id(randomString()).html());
}

    function addInfiniteDiv(form) {
    return append(form, new div(e.div, 'infinite__div').html(new div(e.div, 'infinite__div__inner readable__container').id(randomString()).html())).find('.infinite__div__inner');
}

    function appendButton(element, button) {
    return append(element, new div(e.button, 'rotonda-bold good__button__buy').attr('style', button.styleString).html(button.text));
}

    function disableButtons(element) {
    $(element).find('button').prop('disabled', true);
}

    function enableButtons(element) {
    setTimeout(function () {
        $(element).find('button').prop('disabled', false);
    }, 300);
}

    function getJSONFormData($form) {
    let unindexed_array = $form.serializeArray();
    let indexed_array = {};

    $.map(unindexed_array, function (n) {
    indexed_array[n['name']] = n['value'];
});

    return indexed_array;
}

    function appendForm(element, url, handler) {
    const form = append(element, new div("form").attr('method', 'post').html());
    form.on('submit', function (event) {
    event.preventDefault();
    submitForm($(this), url, handler);
    return false;
});
    return form;
}

    function submitForm(element, url, handler, withoutLoader = false, withScroll = false, callbackAnyway = false) {
    if (cancelForm) return;
    if (!withoutLoader)
    supervisor("body");
    disableButtons(element);

    let readableArray = [];

    $(element).find('input').each(function () {
    const inputPosition = $(this).attr('readable-input-position');
    const inputDescription = $(this).attr('readable-input-description');
    const inputVal = $(this).val();

    if (inputPosition !== undefined && inputDescription !== undefined && inputPosition !== "" && inputVal !== undefined && (inputVal !== "" || $(this).attr('type') === 'file')) {
    let obj = {
    'inputPosition': $(this).attr('readable-input-position'),
    'inputDescription': $(this).attr('readable-input-description'),
    'value': inputVal,
    'position': $(this).closest(".readable__container").attr('id') + "." + $(this).closest(".readable__container").parent().closest(".readable__container").attr('id') + "." + $(this).closest(".readable__container").parent().closest(".readable__container").parent().closest(".readable__container").attr('id')
};

    $.each(this.attributes, function (i, attr) {
    const name = attr.name;
    const value = attr.value;
    if (name.startsWith("readable") && name !== "readable-input-description" && name !== "readable-input-position")
    obj[name.replace("readable-", "")] = value.replace("readable-", "");
});

    readableArray.push(obj);
}
});

    if (url !== "") {
    $.ajax({
    url: url,
    type: 'POST',
    contentType: 'application/json',
    data: JSON.stringify($.extend(getJSONFormData($(element)), {"readable": readableArray, "_id": id})),
    beforeSend: function (xhr) {
    xhr.setRequestHeader('Credentials', 'include');
},
    complete: function (jqXHR) {
    enableButtons(element);

    const data = $.parseJSON(jqXHR.responseText);

    if (data.code !== 200 && data.comment !== "" && data.comment !== undefined && data.code !== 410) {
    showTopPopup(data.comment);
    if (callbackAnyway) handler(data);
    return;
}

    const errored = $(element).find(".errored");
    errored.css({
    'transition': 'none',
    '-webkit-transition': 'none',
    '-moz-transition': 'none',
    '-o-transition': 'none'
});
    errored.removeClass('errored__displaying');
    errored.css('opacity', '0');
    errored.css({
    'transition': 'All 0.3s ease',
    '-webkit-transition': 'All 0.3s ease',
    '-moz-transition': 'All 0.3s ease',
    '-o-transition': 'All 0.3s ease',
});

    if (data.code === 400) {
    const iq = $("#" + Object.keys(data.response)[0]);
    if (withScroll)
    $([document.documentElement, document.body]).animate({
    scrollTop: iq.offset().top - 50
}, 300);
    setTimeout(function () {
    if (withScroll)
    iq.find(".rounded")[0].focus();

    Object.keys(data.response).forEach(function (key) {
    const el = $("#" + key);
    el.find(".errored").css('opacity', 1).text(data.response[key]).addClass('errored__displaying');

});
}, ((withScroll) ? 500 : 100));
} else if (data.code === 405) {
    showTopPopup(data.comment);
}

    if (!withoutLoader)
    supervisorEnd("body");
    handler(data);
}
});
}
}

    function append(element, string) {
    return $(string).appendTo(element);
}

    function hold(element) {
    element.css('opacity', 0);
}

    function unhold(element) {
    element.css('opacity', 1);
}

    function empty(element, count = 1) {
    $(element).append("<div class='empty' style='height:" + (count * 0.9).toString() + "em'></div>");
}

    class Input {
    value = "";
    placeholder;
    readableInputDescription = "";
    styleString = "";
    readableInputPosition = "";
    id = "";

    constructor(name, type) {
    this.name = name;
    this.type = type;
}

    setReadableInputDescription(description) {
    this.readableInputDescription = description
}

    setReadableInputPosition(position) {
    this.readableInputPosition = position
}


    // addStyle(style) {
    //     this.styleString += " " + style;
    // }

    setValue(value) {
    if (value !== undefined && value !== 'null' && value !== null)
    this.value = value;
}

    setId(value) {
    this.id = value;
}

    setPlaceholder(placeholder) {
    this.placeholder = placeholder;
}
}

    class ImageInput {
    value = "";
    placeholder;
    styleString = "";
    uploadText = "Загрузите фотографию";

    constructor(name, type) {
    this.name = name;
    this.type = type;
}


    // addStyle(style) {
    //     this.styleString += " " + style;
    // }

    setValue(value) {
    if (value !== undefined)
    this.value = value;
}

    setUploadText(value) {
    if (value !== undefined)
    this.uploadText = value;
}

    setPlaceholder(placeholder) {
    this.placeholder = placeholder;
}
}


    class Button {
    text = "Подтвердить";
    classString = "";
    styleString = "";

    constructor(name, type) {
    this.type = type;
    this.name = name;
}

    addClass(className) {
    this.classString += " " + className;
}

    addStyle(style) {
    this.styleString += " " + style;
}

    setText(text) {
    if (text !== undefined)
    this.text = text;
}
}

    class div {
    divSt = {};
    divStBf = {};
    divId = "";
    divCl = "";
    divHTML = "";
    divAttrHTML = "";
    divAttr = "";
    shallBeFull = false;

    constructor(el, cl = "", id = "") {
    this.el = el;
    this.divCl = cl;
    this.divId = id;
}

    id(id) {
    this.divId = id;
    return this;
}

    cl(cl) {
    this.divCl = cl;
    return this;
}

    full() {
    this.shallBeFull = true;
    return this;
}

    st(st, arg = "") {
    let o = {};
    o[st] = arg;

    if (arg === "")
    this.divSt = st;
    else
    this.divSt = o;
    return this;
}

    css(st, arg = "") {
    let o = {};
    o[st] = arg;

    if (arg === "")
    this.divSt = st;
    else
    this.divSt = o;
    return this;
}

    cssBefore(st, arg = "") {
    let o = {};
    o[st] = arg;

    if (arg === "")
    this.divStBf = st;
    else
    this.divStBf = o;
    return this;
}

    attr(attrObj, arg = "") {
    if (arg === "") {
    for (const name in attrObj)
    if (Object.prototype.hasOwnProperty.call(attrObj, name))
    this.divAttr += " " + name + '="' + attrObj[name] + '"';
} else
    this.divAttr += " " + attrObj + '="' + arg + '"';
    return this;
}

    // attrHTML(attr) {
    //     this.divAttrHTML = attr;
    //     return this;
    // }

    html(html = "") {
    if (this.shallBeFull && html === "") {
    if (html === "") return "";
} else {
    this.divHTML = html;
    return this.string();
}
}

    string() {
    let stString = "";
    let bfString = "";
    let clString = "";
    let idString = "";

    for (let prop in this.divSt)
    if (Object.prototype.hasOwnProperty.call(this.divSt, prop))
    stString += prop + ": " + this.divSt[prop] + ";";

    for (let prop in this.divStBf)
    if (Object.prototype.hasOwnProperty.call(this.divStBf, prop))
    bfString += prop + ": " + this.divStBf[prop] + ";";

    if (stString !== "")
    stString = ' style="' + stString + '"';

    if (this.divCl !== "")
    clString = ' class="' + this.divCl + '"';

    if (this.divId !== "")
    idString = ' id="' + this.divId + '"';

    let bf = '';
    let moreRandStr = "";
    if (Object.keys(this.divStBf).length > 0) {
    moreRandStr = randomString();
    bf = ["<style>", "[r=\"" + moreRandStr + "\"]::before {", bfString, "}</style>"].join("");
}


    return '<' + this.el + clString + stString + idString + this.divAttrHTML + this.divAttr + ' r="' + moreRandStr + '"' + '>' + this.divHTML + '</' + this.el + '>' + bf;
}
}

    const positions = {
    'up': "up", 'float': "float", "static": "static", "hidden": "hidden"
};

    const elements = {
    'div': 'div',
    'p': 'p',
    'a': 'a',
    'img': 'img',
    'input': 'input',
    'button': 'button',
    'label': 'label',
    'span': 'span',
    'ul': 'ul',
    'li': 'li',
    'i': 'i',
    're': 're'
};

    const e = {
    'div': 'div',
    'p': 'p',
    'a': 'a',
    'img': 'img',
    'input': 'input',
    'button': 'button',
    'label': 'label',
    'span': 'span',
    'ul': 'ul',
    'li': 'li',
    'i': 'i',
    're': 're'
};


    let popupState = 0;
    let popupsInQueue = 0;
    let timeout = 0;

    function goTo(page, highlighted_page, title = '') {
    console.log("Written", page, " in history");

    let state = {'page': page, 'highlight_page': highlighted_page};
    history.pushState(state, title, page)
}

    function selectSection(section) {
    $(`.main__left__menu__section[section-url=${section}]`).addClass('section__active');
    $(`.main__left__menu__section[section-url!=${section}]`).removeClass('section__active');
}

    function loadPage(element, page, pageToHighlight, data = {"post": true}, callback = function () {
}) {
    console.log("Load page", page);

    $.ajax({
    url: page,
    type: 'POST',
    data: data,
    beforeSend: function (xhr) {
    xhr.setRequestHeader('Credentials', 'include');
},
    complete: function (jqXHR, status) {
    selectSection(pageToHighlight);
    $("head").append(jqXHR.responseText);
    callback();
}
});
}

    function getMenu(callback = function () {
}) {
    updateCartCount(function () {
        APIRequest("api/get/sections", {}, function (sectionsData) {
            let i = 0;
            $(".main__left__menu_inner").html('');

            for (const sectionID in sectionsData.response) {
                if (sectionsData.response.hasOwnProperty(sectionID)) {
                    i++;

                    const section = sectionsData.response[sectionID];
                    const temp = append($(".main__left__menu_inner"), new div(e.div, "main__left__menu__section rotonda-bold").html(section.name));
                    temp.click(function () {
                        if ($("#" + section.name_eng).offset() !== undefined) {
                            document.title = "Никита Васин: мерч Смешарики";
                            $([document.documentElement, document.body]).animate({
                                scrollTop: $("#" + section.name_eng).offset().top - 50
                            }, 500);
                        } else {
                            document.title = "Никита Васин: мерч Смешарики";
                            goTo("/", "/");
                            getCatalogue($(".main__main__inner"), section.name_eng);
                        }
                    });
                }
            }
            callback();
        });
    });
}

    function numberWithSpaces(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
}

    function iOS() {
    return [
    'iPad Simulator',
    'iPhone Simulator',
    'iPod Simulator',
    'iPad',
    'iPhone',
    'iPod'
    ].includes(navigator.platform)
    // iPad on iOS 13 detection
    || (navigator.userAgent.includes("Mac") && "ontouchend" in document)
}

    function declOfNum(n, text_forms) {
    // ромашка, ромашки, ромашек
    //день, дня, дней

    n = Math.abs(n) % 100;
    var n1 = n % 10;
    if (n > 10 && n < 20) {
    return [n, text_forms[2]].join(" ");
}
    if (n1 > 1 && n1 < 5) {
    return [n, text_forms[1]].join(" ");
}
    if (n1 == 1) {
    return [n, text_forms[0]].join(" ");
}
    return [n, text_forms[2]].join(" ");
}

    function getCatalogue(element, sectionToScroll = "") {
    updateCartCount(function () {
        APIRequest("api/get/sections", {}, function (sectionsData) {
            APIRequest("api/get/goods", {}, function (goodsDataLocal) {
                APIRequest("api/get/orders", {}, function (ordersData) {

                        let container = $(".main__main__inner");
                        container.html(defaultCart());

                        container.append(new div(e.div, 'real__world rotonda-default').html(
                            new div(e.div, 'user').html(
                                new div(e.img, 'user__image').attr('src', '').html() +
                                new div(e.span, 'user__name real__main').html('Пользователь') +
                                new div(e.span, 'user__description real__minor').html('Пока нет заказов') +
                                new div(e.span, 'user__settings real__minor').html('Личные данные')
                            ) +

                            new div(e.div, 'email').html(
                                new div(e.img, 'email__image').attr('src', '').html() +
                                new div(e.span, 'email__email real__main').html('shop@nikitavasin.ru') +
                                new div(e.span, 'email__description real__minor').html('Отвечаем круглосуточно')
                            ) +

                            new div(e.div, 'emailguest').html(
                                new div(e.img, 'email__image').attr('src', '').html() +
                                new div(e.span, 'email__email real__main').html('shop@nikitavasin.ru') +
                                new div(e.span, 'email__description real__minor').html('Отвечаем круглосуточно')
                            ) +

                            new div(e.div, 'limited rotonda-bold').html('Лимитированная коллекция') +

                            new div(e.div, 'phone').html(
                                new div(e.img, 'phone__image').attr('src', '').html() +
                                new div(e.a, '').attr('href', 'tel:+74951752004').html(new div(e.span, 'phone__phone real__main').html('+7 (495) 17-5-2004')) +
                                new div(e.span, 'phone__description real__minor').html('пн—вс, 10:00—20:00')
                            )
                            )
                        );


                        $(".email").css('display', 'none');
                        $(".user").css('display', 'none');

                        if (ordersData.response.length > 0) {
                            $(".limited").css('display', 'none');
                            $(".user").css('display', 'block');
                            $(".emailguest").css('display', 'none');
                            $(".email").css('display', 'block');

                            $(".user__name").html("Ваш заказ " + ordersData.response[0].cartStepDescription);
                            $(".user__description").html([ordersData.response[0].firstName, ordersData.response[0].lastName].join(" ") + ", " + ordersData.response[0].email);
                            $(".user__settings").html(
                                new div(e.div, 'p__link orders').html('Все заказы: ' + declOfNum(ordersData.response.length, ['заказ', 'заказа', 'заказов'])) +
                                new div(e.div, 'p__link me').html('Личные данные')
                            );
                        }

                        $(".me").click(function () {
                            loadPage("/me", "/me");
                        });

                        $(".orders").click(function () {
                            loadPage("/orders", "/orders");
                        });

                        placeCart();

                        let i = 0;

                        let main_inner = $(".main__left__menu_inner");
                        main_inner.html('');

                        for (const sectionID in sectionsData.response) {
                            if (sectionsData.response.hasOwnProperty(sectionID)) {
                                i++;

                                const section = sectionsData.response[sectionID];
                                const temp = append(main_inner, new div(e.div, "main__left__menu__section rotonda-bold").html(section.name));
                                temp.click(function () {
                                    if ($("#" + section.name_eng).offset() !== undefined)
                                        $([document.documentElement, document.body]).animate({
                                            scrollTop: $("#" + section.name_eng).offset().top - 50
                                        }, 500);
                                    else {
                                        goTo("/", "/");
                                        getCatalogue($(".main__main__inner"), section.name_eng);
                                    }
                                });

                                const goods = goodsDataLocal.response.filter(function (i) {
                                    if (i.section !== undefined) {
                                        return i.section === section._id.$oid;
                                    } else return false;
                                });

                                const svgId = randomString();

                                let className = "main__section__header" + ((section.name_eng === "alphabet") ? " alphabet" : "");

                                container.append(new div(e.div, className).id(section.name_eng).st({
                                        'background-image': "url(" + section.readable[0]['image-url'] + ")",
                                        'box-shadow': 'inset 0 0 0 1000px ' + section.main_color + '38;',
                                    }).html(
                                    new div("object", "main__section__header__title smeshariki").id(svgId).attr('data', 'assets/svg/sections/' + section.name_eng + '.svg?ver=8').html())
                                    + new div(e.img, 'characters__promo').attr('src', 'https://shop.nikitavasin.ru/assets/png/characters/' + section.name_eng + '.png?ver=2').html());

                                let appendContainer = (section.name_eng === "alphabet") ? $(".main__section__header").last() : container;
                                if (section.name_eng === "alphabet") append(appendContainer, new div(e.p, 'rotonda-bold up__text').html('Создай свой дизайн!'));

                                const sectionCatalogue = append(appendContainer, new div(e.div, 'catalogue').html());

                                for (let i = 0; i < goods.length; i++) {
                                    const good = goods[i];

                                    let divToAppend = sectionCatalogue.find(".catalogue__half").last();
                                    if (i % 2 === 0)
                                        divToAppend = append(sectionCatalogue, new div(e.div, 'catalogue__half').html());

                                    divToAppend.append(new div(e.div, 'good').html(
                                        new div(e.div, 'good__gallery').attr("onclick", "loadGood('" + good._id.$oid + "')").attr("db-id", good._id.$oid).st('cursor', 'pointer').html()
                                        + new div(e.div, 'good__div__name__price').html(
                                        new div(e.div, 'good__name').html(good.name)
                                        + new div(e.span, 'good__price').html(numberWithSpaces(good.price) + new div(elements.span, 'rouble').html("c")))
                                        + new div(e.div, 'good__button__buy').attr("onclick", "loadGood('" + good._id.$oid + "')").attr("db-id", good._id.$oid).html("Выбрать")
                                    ));

                                    // let tp = (good.name.includes("Футболка")) ? "shirt_" : "hoodie_";
                                    // let color = "black";

                                    const gallery = divToAppend.find("[db-id=" + good._id.$oid + "]");
                                    gallery.cssBefore('background-image', "url('" + filterAndGetValue(good.readable, "inputDescription", "image", 'image-url') + "')");
                                }
                            }
                        }

                        if (sectionToScroll !== "") {
                            $([document.documentElement, document.body]).animate({
                                scrollTop: $("#" + sectionToScroll).offset().top - 50
                            }, 500);
                        }

                        makeMainContainerVisible(false);
                    }
                );
            });
        });
    });
}

    function loadGood(goodId = '603385a0bf272e75c14212b6') {
    loadPage($('.main__main__inner'), 'good?id=' + goodId);
}

    function makeMainContainerVisible(goToTop = true) {
    shouldWriteInHistory = true;

    if (goToTop)
    $([document.documentElement, document.body]).animate({
    scrollTop: 0
}, 0);
    const container = $(".main__container").add(".cart__inner");
    container.css('transition', 'none');
    setTimeout(function () {
    container.css('opacity', 1);
    setTimeout(function () {
    container.css('transition', '0.3s all ease');
}, 400);
}, 10);

}

    function defaultCart() {
    return "";
}

    function delay(fn, ms) {
    let timer = 0
    return function (...args) {
    clearTimeout(timer)
    timer = setTimeout(fn.bind(this, ...args), ms || 0)
}
}

    function supervisor() {
    supervisorActionsCount++;
    timer = setInterval(function () {
    supervisorAction();
}, 50);
}

    function supervisorAction() {
    const body = $("body");
    const loader = $(body).find(".loader")[0];
    if (loader === undefined)
    $(body).prepend(new div(elements.div, 'loader').st('opacity', '0').html(new div(elements.img).attr('src', 'assets/svg/loader.svg').html()));
    if ($(body).find(".loader").css('opacity') < 1)
    $(body).find(".loader").css('opacity', 1);
    if (supervisorActionsCount === 0)
    $(body).find(".loader").css('opacity', 0);
}

    function supervisorEnd(element) {
    supervisorActionsCount--;
    setTimeout(function () {
    clearInterval(timer);
}, 100);
}

    function placeCart() {
    if ($(".cart")[0] === undefined) {
    let filled = "";
    if (cartCount > 0) filled = " filled";
    const bl = $(".main__main__block");
    bl.prepend(new div('div', 'cart' + filled).html(new div(elements.span, 'rotonda-bold').html(cartCount)));
    bl.find(".cart").click(function () {
    if (!$(".cart__outer").length)
    loadPage($(".main__main__inner"), "cart?step=" + step, "cart");
});
}
}

    function APIRequest(url, data, handler, withLoader = true, errorHandler = function () {
}) {
    const random = randomString();

    if (url.includes("api/get/goods") && goodsData !== null) {
    handler(goodsData);
} else if (url.includes("api/get/sections") && sectionsData !== null) {
    handler(sectionsData);
} else {
    if (withLoader)
    supervisor("body");
    $.ajax({
    url: url,
    type: 'POST',
    data: data,
    beforeSend: function (xhr) {
    xhr.setRequestHeader('Credentials', 'include');
},
    complete: function (jqXHR, status) {
    if (withLoader)
    supervisorEnd("body");
    var data = $.parseJSON(jqXHR.responseText);
    if (data.code === 401) {
    showTopPopup(data.comment);
    errorHandler(data);
} else {
    if (url.includes("api/get/goods"))
    goodsData = data;
    if (url.includes("api/get/sections"))
    sectionsData = data;
    handler(data);
}

    const element = $(".main__main__inner");

    const errored = $(element).find(".errored");
    errored.css({
    'transition': 'none',
    '-webkit-transition': 'none',
    '-moz-transition': 'none',
    '-o-transition': 'none'
});
    errored.removeClass('errored__displaying');
    errored.css('opacity', '0');
    errored.css({
    'transition': 'All 0.3s ease',
    '-webkit-transition': 'All 0.3s ease',
    '-moz-transition': 'All 0.3s ease',
    '-o-transition': 'All 0.3s ease',
});

    if (data.code === 400) {
    const iq = $("#" + Object.keys(data.response)[0]);
    setTimeout(function () {
    Object.keys(data.response).forEach(function (key) {
    const el = $("#" + key);
    el.find(".errored").css('opacity', 1).text(data.response[key]).addClass('errored__displaying');

});
}, 100);
} else if (data.code === 405) {
    showTopPopup(data.comment);
}

}
});
}
}

    function APIRequestJSON(url, data, handler, withLoader = true) {
    const random = randomString();

    if (url.includes("api/get/goods") && goodsData !== null) {
    handler(goodsData);
} else if (url.includes("api/get/sections") && sectionsData !== null) {
    handler(sectionsData);
} else {
    if (withLoader)
    supervisor("body");
    $.ajax({
    url: url,
    contentType: 'application/json',
    method: 'POST',
    data: JSON.stringify(data),
    beforeSend: function (xhr) {
    xhr.setRequestHeader('Credentials', 'include');
},
    complete: function (jqXHR, status) {
    if (withLoader)
    supervisorEnd("body");
    var data = $.parseJSON(jqXHR.responseText);
    if (data.code === 401) {
    showTopPopup(data.comment);
} else {
    if (url.includes("api/get/goods"))
    goodsData = data;
    if (url.includes("api/get/sections"))
    sectionsData = data;
    handler(data);
}
}
});
}
}

    function request(url, data, handler) {
    $.ajax({
        url: url,
        type: 'POST',
        data: data,
        beforeSend: function (xhr) {
            xhr.setRequestHeader('Credentials', 'include');
        },
        complete: function (jqXHR, status) {
            handler(jqXHR.responseText);
        }
    });
}

    function showPopup(html) {
    if ($('div.popup').length === 0) {
    $("body").append(new div(e.div, 'popup__outer').st('opacity', '0').html(new div(e.div, 'popup').html(new div(e.img, 'popup__cancel').attr('src', 'https://shop.nikitavasin.ru/assets/svg/cancel.svg').html() + html)));

    setTimeout(function () {
    $(".popup__outer").css('opacity', '1');
}, 100);

    $(window).click(function () {
    hidePopup();
});

    $('.popup').click(function (event) {
    event.stopPropagation();
});

    $('.popup__cancel').on('click', function () {
    hidePopup();
});
}
}

    function hidePopup() {
    const popup = $(".popup__outer");
    popup.css('pointer-events', 'none');
    popup.css('opacity', '0');

    setTimeout(function () {
    popup.remove();
}, 400);
}

    function showTopPopup(text, isGood = false) {
    /* popupState
       0 - не отображается, удалён
       1 - отображается
       2 - открывается
       3 - закрывается
     */

    popupsInQueue++;

    switch (popupState) {
    case 0:
    timeout = 100 + 1250 * (popupsInQueue - 1);
    break;
    case 1:
    timeout = 850 + 1250 * (popupsInQueue - 1);
    break;
    case 2:
    timeout = 1250 + 1250 * (popupsInQueue - 1);
    break;
    case 3:
    timeout = 350 + 1250 * (popupsInQueue - 1);
    break;
}

    setTimeout(function () {
    popupsInQueue--;
    if (popupState === 0) {
    popupState = 2;
    $("body").append(new div(e.div, 'top__popup rotonda-bold ' + (isGood ? ("top__good") : "")).html());

    let popup = $(".top__popup");
    popup.html(text);

    setTimeout(function () {
    popup.toggleClass('top__popup__displayed');
}, 25);

    setTimeout(function () {
    popupState = 1;
}, 300);

    setTimeout(function () {
    if (popupsInQueue > 0) {
    popupState = 3;
    hideTopPopup();
}
}, 500);

    setTimeout(function () {
    if (popupsInQueue === 0) {
    popupState = 3;
    hideTopPopup();
}
}, 3500);
} else {
    popupState = 3;
    hideTopPopup();
}
}, timeout);
}

    function hideTopPopup() {
    setTimeout(function () {
        let popup = $(".top__popup");

        if (popupState === 3)
            popup.toggleClass('top__popup__displayed');
        setTimeout(function () {
            if (popupState === 3) {
                $(".top__popup").remove();
                popupState = 0;
            }
        }, 300);
    }, 25);
}
