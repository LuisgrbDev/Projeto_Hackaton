function buscar() {
    document.getElementById('mostrar').style.display = 'block';
}

function confirmDelete() {
    var overlay = document.getElementById('overlay');
    overlay.style.display = 'flex';
}

function hideConfirmPopup() {
    var overlay = document.getElementById('overlay');
    overlay.style.display = 'none';
}

function deleteItem() {
    // Aqui você inclui a lógica para interagir com o banco de dados
    var sucesso = true; // Altere para false se a exclusão falhar
    
    if (sucesso) {

        var mensagemSucesso = document.getElementById('mensagem-sucesso');
        mensagemSucesso.textContent = "Item deletado com sucesso!";
        mensagemSucesso.style.display = 'block'; 
        
        hideConfirmPopup();

        setTimeout(function() {
            mensagemSucesso.style.display = 'none'; 
        }, 3000);
    } else {
        var mensagemErro = document.getElementById('mensagem-erro');
        mensagemErro.textContent = "Erro ao deletar o item. Por favor, tente novamente mais tarde.";
        mensagemErro.style.display = 'block'; 

        
        setTimeout(function() {
            mensagemErro.style.display = 'none'; 
        }, 3000);
    }
}

function cancelDelete() {
    var mensagemCancelamento = document.getElementById('mensagem-cancelamento');
    mensagemCancelamento.textContent = "Exclusão cancelada.";
    mensagemCancelamento.style.display = 'block';

    hideConfirmPopup();

    setTimeout(function() {
        mensagemCancelamento.style.display = 'none'; 
    }, 3000);
}


function loginPopup() {
    document.getElementById('loginOverlay').style.display = 'flex';
}

function hideLoginPopup() {
    document.getElementById('loginOverlay').style.display = 'none';
    document.getElementById('cadastro').style.display = 'none';
    document.getElementById('login').style.display = 'block';
}

function cadastrar() {
    document.getElementById('cadastro').style.display = 'block';
    document.getElementById('login').style.display = 'none';
}

