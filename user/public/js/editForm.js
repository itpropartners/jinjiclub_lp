/**
  * @param {string} id
  * @param {string} name
  * @param {string} label
  * @param {string} [opt_hideClass='d-none']
  */
function setEventHasManyForm(id, name, label, opt_hideClass)
{
    var target = document.getElementById(id);
    var addButton = target.querySelector('button.add');
    var delButtonList = target.querySelectorAll('button.del');
    var hideClass = opt_hideClass || 'd-none';

    var funcFormClear = function(form, index){
        return form.innerHTML
          .replace(/(?=.*input)(.*value=").*"/g, '$1"')
          .replace(/selected/g, '')
          .replace(new RegExp('('+label+ ')[0-9]+', 'g'), '$1'+(index + 1))
          .replace(new RegExp('('+name+')\[[0-9]+\]', 'g'), '$1['+index+']');
    }

    var funcDelete = function(event){
        var _self = event.currentTarget;
        var item =  $(_self).parents('[data-index]')[0];  // JQuery
        var index = parseInt(item.dataset.index) - 1 ;
        var _name = name;

        var hiddenInputField = function(){
            var input = document.createElement('input');
            input.setAttribute('type', 'hidden')
            input.setAttribute('name', _name+'['+index+'][deleted]')
            input.setAttribute('value', 1);
            return input;
        }();

        item.classList.add(hideClass);
        item.appendChild(hiddenInputField);
    };

    addButton.addEventListener('click', function(){
        var children = target.querySelectorAll('[data-index]');
        var lastChild = children[children.length - 1];
        var newform = lastChild.cloneNode(true);
        var index = parseInt(newform.dataset.index);

        if(lastChild.classList["value"].match(/d-none/)){
          $.each(children, function(index){
            child = children[index];
            if(child.classList["value"].match(/d-none/)){
              child.classList.remove(hideClass);
              return false;
            }
          })
        }else{
          newform.dataset.index = index + 1;
          newform.classList.remove(hideClass);

          newform.innerHTML = funcFormClear(newform, index);

          newform.querySelector('button.del').addEventListener('click', funcDelete);

          lastChild.parentNode.insertBefore(newform, lastChild.nextSibling);
        }
    });

    for(var i = 0; i < delButtonList.length; i++){
        delButtonList[i].addEventListener('click', funcDelete);
    }
}
