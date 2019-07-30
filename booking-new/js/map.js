function generateRandom(arr) {    
    return arr[Math.floor(Math.random() * arr.length)];
};

function generateRandomNoRepeat(arr) {    
    var randomNum = Math.floor(Math.random() * arr.length);
    var randomElem = arr[randomNum];
    arr.splice(randomNum, 1);
    return randomElem;
};

// Настя
// Убрала createRandomArr, оставила вариант Олега

// ++ Олег
// Возможный вариант функции createRandomArr.
function createRandomArr(arr){
    // Создаём массив реципиент.
    newArr = [];
    // Поэлементно перебираем массив донор. 
    arr.forEach(element => {
        // Для каждого элемента случайным образом бросаем кубик. 
        // Если выпало 1, записываем элемент в массив реципиент.
        if (Math.round(Math.random()) === 1){
            newArr.push(element);
        }    
    });
    return newArr;
}
// --

function numGenerator(numFrom, numTo) {
    return Math.round(Math.random() * (numTo - numFrom)) + numFrom;
};

function compareRandom(a, b) {
    return Math.random() - 0.5;
};

function createPin(pin) {
    var point = pointTemplate.cloneNode('true');
    point.style = 'left: ' + pin.location.x + 'px; top: '+ pin.location.y + 'px';
    point.querySelector('img').src = pin.author.avatar;
    point.querySelector('img').alt = pin.offer.title;
    return point;
};

function showPin(pin) {
    mapBlock.appendChild(pin);
};

function createNotice(notice) {
    var noticeElem = noticeTemplate.cloneNode('true');
    noticeElem.querySelector('.popup__title').textContent = notice.offer.title;
    noticeElem.querySelector('.popup__text--address').textContent = notice.offer.address;
    noticeElem.querySelector('.popup__text--price').textContent = notice.offer.price + ' ₽/ночь';
    var type = '';
    switch (notice.offer.type) {
        case 'flat':
            type = "Квартира";
            break;
        case 'bungalo':
            type = "Бунгало";
            break;
        case 'house':
            type = "Дом";
            break;
        case 'palace':
            type = "Дворец";
            break;
        }
    noticeElem.querySelector('.popup__type').textContent = type;
    noticeElem.querySelector('.popup__text--capacity').textContent = notice.offer.rooms + ' комнаты для ' + notice.offer.guests + ' гостей';
    noticeElem.querySelector('.popup__text--time').textContent = 'Заезд после ' + notice.offer.checkin + ', выезд до ' + notice.offer.checkout;
    noticeElem.querySelector('.popup__features').textContent = notice.offer.features.join(', ');
    noticeElem.querySelector('.popup__description').textContent = notice.offer.description;
    noticeElem.querySelector('.popup__photos img').src = notice.offer.photos[0];
    noticeElem.querySelector('.popup__avatar').src = notice.author.avatar;

    return noticeElem;
}

var avatarsNumsArr = [1, 2, 3, 4, 5, 6, 7, 8];
var avatarsNumsArrCopy = avatarsNumsArr;
var avatarsNumsArrInitLength = avatarsNumsArrCopy.length;

var titlesArr = ["Большая уютная квартира", "Маленькая уютная квартира", "Огромный прекрасный дворец", "Маленький дворец", "Красивый гостевой домик", "Шикарный домик", "Уютное бунгало далеко от моря", "Аутентичное бунгало по колено в воде"];
var titlesArrCopy = titlesArr;
var titlesArrInitLength = titlesArrCopy.length;

var featuresArr = ["wifi", "dishwasher", "parking", "washer", "elevator", "conditioner"];

var photos = ["http://o0.github.io/assets/images/tokyo/hotel1.jpg", "http://o0.github.io/assets/images/tokyo/hotel2.jpg", "http://o0.github.io/assets/images/tokyo/hotel3.jpg"];

var mapBlock = document.querySelector('.map');
var noticeForm = document.querySelector('.ad-form');

var mapFilter = document.querySelector('.map__filters-container');

var pointTemplate = document.querySelector('#pin').content.querySelector('.map__pin');

var noticeTemplate = document.querySelector('#card').content.querySelector('.map__card');

// ++ Олег
// Фабрика по созданию нового элемента массива pointsUPD.
// Заполним новый элемент некими значениями по умолчанию.
function createPoint(){
    var newObject = {
        author: {
            avatar: 'img/avatars/user0' + generateRandomNoRepeat(avatarsNumsArrCopy) + '.png'
        },
        offer: {
            title: generateRandomNoRepeat(titlesArrCopy),
            address: '{{location.x}}, {{location.y}}',
            price: numGenerator(1000, 1000000),
            type: 'palace',
            rooms: numGenerator(1, 5),
            guests: numGenerator(10, 12),
            checkin: '12-00',
            checkout: '14-00',
            // Использована обновлённая функция.
            features: createRandomArr(featuresArr),
            description: ' ',
            photos: photos.sort(compareRandom)
        },
        location: {
            x: numGenerator(mapBlock.getBoundingClientRect().left, mapBlock.getBoundingClientRect().right),
            y: numGenerator(130, 630)
        }
    }

    return newObject;
}

// Настя - убрала старый статичный вывод массива объектов points

var points = [];
var colOfelements = 8;

// Циклом заполним наш массив pointsUPD.
for (let index = 0; index < colOfelements; index++) {
    var newPoint = createPoint();
    // Немного меняем свойства объекта для разнообразия. 
    // Но вообще это не совсем красиво в условия напрямую задавать значения индекса.
    // Ведь количество элементов colOfelements неизвестно заранее и может быть хоть 2, хоть 49.  
    if (index == 0) {
        newPoint.offer.address = '300, 600';
    // В этом элементе мы ничего не меняем, т.к. брали его за эталон при создании нового объекта.
    } else if (index == 1) {
        
    } else if (index == 2) {
        newPoint.offer.type = 'flat';
    } else if (index == 3) {
        newPoint.offer.type = 'house';
    } else if (index == 4) {
        newPoint.offer.type = 'bungalo';
        newPoint.offer.checkout = '12-00';        
    } else if (index == 5) {
        newPoint.offer.checkout = '13-00';        
    } else if (index == 6) {
        newPoint.offer.type = 'bungalo';
        newPoint.offer.checkin = '14-00';        
    } else if (index == 7) {
        newPoint.offer.type = 'flat';
        newPoint.offer.checkin = '13-00';  
        newPoint.offer.checkout = '13-00';              
    }
    
    points.push(newPoint);    
}

// -- Олег

function createAndShowNotice(pointElem) {
    var notice = createNotice(pointElem);
    mapBlock.insertBefore(notice, mapFilter);
    // Закрытие объявление по кнопке "Закрыть"
    var noticeCloseButton = notice.querySelector('.popup__close');
    noticeCloseButton.addEventListener('click', function() {
        notice.remove();
    });
}

// Блокировка полей формы подачи объявления
var noticeFieldsets = noticeForm.querySelectorAll('fieldset');
noticeFieldsets.forEach(element => {
    element.setAttribute('disabled', 'disabled');
});

// Активирование карты

var isMapActivated = false;

var activateMap = function() {
    if (!isMapActivated) {
        mapBlock.classList.remove('map--faded'); // Убрала блок с карты
        noticeForm.classList.remove('ad-form--disabled'); // Убрала общий блок с формы
        noticeFieldsets.forEach(element => { // Разблокировала все fieldset
            element.removeAttribute('disabled');
        });
        for (var i = 0; i < points.length; i++) {
            var pointElement = points[i];
            var point = createPin(points[i]);
            showPin(point);
            var addHandleToPoint = function(pointElem) {
                point.addEventListener('click', function() {
                    var oldNotice = document.querySelectorAll('article.map__card.popup'); // Сначала удаляю все старые объявления
                    oldNotice.forEach(element => {
                        element.remove();
                    });
                    createAndShowNotice(pointElem); // Задаю i-той метке i-ое объявление, пока не работает, задается всем меткам последний элемент массива.
                });
            }
            addHandleToPoint(pointElement);            
        }
        createAndShowNotice(points[0]);
        isMapActivated = true;
    }    
};

var mainPin = document.querySelector('.map__pin--main');
mainPin.addEventListener('mouseup', activateMap);

// Определение ширины основной метки, ее первоначальной и дальнейшей высоты

var addressInput = document.querySelector('#address');
const MAIN_PIN_WIDTH = mainPin.offsetWidth;
const MAIN_PIN_HEIGHT = mainPin.offsetHeight;
const MAIN_PIN_ACTIVE_HEIGHT = mainPin.offsetHeight + 22;

// Определение первоначальных координат метки

(function countMainPinCoordsInit() {
    var mainPinCenterX = Math.round(mainPin.getBoundingClientRect().left - mapBlock.getBoundingClientRect().left + MAIN_PIN_WIDTH/2);
    var mainPinCenterY = Math.round(mainPin.getBoundingClientRect().top - mapBlock.getBoundingClientRect().top + MAIN_PIN_HEIGHT/2);
    addressInput.value = mainPinCenterX + ', ' + mainPinCenterY;
})();

// Определение координат метки при отпускании клавиши мыши

mainPin.addEventListener('mousedown', function() {
    var defineLocation = function() {
        var mainPinCenterX = Math.round(mainPin.getBoundingClientRect().left - mapBlock.getBoundingClientRect().left + MAIN_PIN_WIDTH/2);
        var mainPinCenterY = Math.round(mainPin.getBoundingClientRect().top - mapBlock.getBoundingClientRect().top + MAIN_PIN_ACTIVE_HEIGHT);
        addressInput.value = mainPinCenterX + ', ' + mainPinCenterY;
        document.removeEventListener('mouseup', defineLocation);
    }
    document.addEventListener('mouseup', defineLocation);
});

// Перетаскивание главной метки

mainPin.addEventListener('mousedown', function(evt) {
    if(isMapActivated) {
        evt.preventDefault();

        var startCoords = {
            x: evt.clientX,
            y: evt.clientY
        };

        var onMouseMove = function(moveEvt) {
            moveEvt.preventDefault();

                var shift = {
                    x: startCoords.x - moveEvt.clientX,
                    y: startCoords.y - moveEvt.clientY
                };

                startCoords = {
                    x: moveEvt.clientX,
                    y: moveEvt.clientY
                };  
                
                if((mainPin.offsetLeft - shift.x) > 0 &&
                   (mainPin.offsetLeft - shift.x) < (mapBlock.offsetWidth - MAIN_PIN_WIDTH) && //Длинное условие if проверяет, не выйдет ли пин за пределы карты. Если не выйдет, перетаскиваем
                   (mainPin.offsetTop - shift.y) > 0 &&
                   (mainPin.offsetTop - shift.y) < (mapBlock.offsetHeight - MAIN_PIN_ACTIVE_HEIGHT))  {
                    mainPin.style.top = (mainPin.offsetTop - shift.y) + 'px';
                    mainPin.style.left = (mainPin.offsetLeft - shift.x) + 'px';
                }
        };

        var onMouseUp = function(upEvt) {
            upEvt.preventDefault();
            document.removeEventListener('mousemove', onMouseMove);
            document.removeEventListener('mouseup', onMouseUp);
        };

        document.addEventListener('mousemove', onMouseMove);
        document.addEventListener('mouseup', onMouseUp);
    }
});
