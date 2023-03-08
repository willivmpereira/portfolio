const dadosInicial = [

    {
        "name": "Rodrigo Carlos Eduardo Vitor Bernardes",
        "cpf": "68872563550",
        "phone": "71988473870",
        "email": "rodrigocarlos@mac.com",
        "cep": "40250-050",
        "place": "Travessa Candeias",
        "bairro": "Cosme de Farias",
        "city": "Salvador",
        "uf": "BA"
    },

    {
        "name": "Thomas Tiago Baptista",
        "cpf": "45111862510",
        "phone": "71989473446",
        "email": "thomastiagobaptista@dr.com",
        "cep": "40255050",
        "place": "Avenida Almeida Santos",
        "bairro": "Matatu",
        "city": "Salvador",
        "uf": "BA"
    },
    {
        "name": "Davi Edson Erick Ribeiro",
        "cpf": "34139880503",
        "phone": "71982833679",
        "email": "daviedsonerickribeiro__daviedsonerickribeiro@contabilidadelibra.com.br",
        "cep": "40435050",
        "place": "Avenida Irmãos Gêmeos",
        "bairro": "Massaranduba",
        "city": "Salvador",
        "uf": "BA"
    },
    {
        "name": "Fernando Nelson Calebe Teixeira",
        "cpf": "18773006599",
        "phone": "402945153",
        "email": "fernandonelsoncalebeteixeira..fernandonelsoncalebeteixeira@openlink.com.br",
        "cep": "40313595",
        "place": "Beco do Jiló",
        "bairro": "Beco do Jiló",
        "city": "Salvador",
        "uf": "BA"
    },
]

const tbody = document.querySelector('#tbody')

const localStorageData = JSON.parse(localStorage.getItem('dados'))
let dados = localStorage.getItem('dados') !== null ? localStorageData : []

const inserirLinha = dados  => {

    const tr = tbody.insertRow()

    let tdName = tr.insertCell()
    let tdCpf = tr.insertCell()
    let tdPhone = tr.insertCell()
    let tdEmail = tr.insertCell()
    let tdCep = tr.insertCell()
    let tdPlace = tr.insertCell()
    let tdBairro = tr.insertCell()
    let tdCity = tr.insertCell()
    let tdUf = tr.insertCell()
    let tdAcoes = tr.insertCell()

    tdName.innerText = dados.name
    tdCpf.innerText = dados.cpf
    tdPhone.innerText = dados.phone
    tdEmail.innerText = dados.email
    tdCep.innerText = dados.cep
    tdPlace.innerText = dados.place
    tdBairro.innerText = dados.bairro
    tdCity.innerText = dados.city
    tdUf.innerText = dados.uf

    tdName.setAttribute('data-label', 'Nome:')
    tdCpf.setAttribute('data-label', 'CPF:')
    tdPhone.setAttribute('data-label', 'Telefone:')
    tdEmail.setAttribute('data-label', 'E-mail:')
    tdCep.setAttribute('data-label', 'CEP:')
    tdPlace.setAttribute('data-label', 'Longradouro:')
    tdBairro.setAttribute('data-label', 'Bairro:')
    tdCity.setAttribute('data-label', 'Estado:')
    tdUf.setAttribute('data-label', 'UF:')
            
    const deleteInput = document.createElement('button')
    deleteInput.innerHTML = '<i class="fa fa-trash-o" aria-hidden="true"></i>'
    deleteInput.setAttribute("id", "delete")
    deleteInput.classList.add('btnFunction')
    deleteInput.setAttribute("onclick", "deletar("+ dados.cpf +")")

    tdAcoes.appendChild(deleteInput)

}


function deletar(cpf){
    if(confirm('Deseja relamente deletar?')){

        for (let i = 0; i < dados.length; i++) {
            if(dados[i].cpf == cpf){
                dados.splice(i, 1)
                tbody.deleteRow(i)
                init()
                updateLocalStorage()
            }
        }

        for (let i = 0; i < dadosInicial.length; i++) {
            if(dadosInicial[i].cpf == cpf){
                dadosInicial.splice(i, 1)
                tbody.deleteRow(i)
                init()
            }
        }
    }
}


const updateLocalStorage = () =>{
    localStorage.setItem('dados', JSON.stringify(dados))
}

const init = () => {
    
    tbody.innerHTML = ''
    dados.forEach(inserirLinha)
    dadosInicial.forEach(inserirLinha)
}

init()


//Fixed navbar
const navbar = document.querySelector('nav')
window.addEventListener('scroll', () => {
    navbar.style.backgroundColor = 'var(--body-color)'
})

const body = document.querySelector('body')
//dark
let darkMode = localStorage.getItem('darkMode')
const btnDark = document.querySelector('.btnDark')


const enableDarkTheme = () =>{
    body.classList.add("dark")
    localStorage.setItem("darkMode", "enabled")
}

const disableDarkTheme = () =>{
    body.classList.remove("dark")
    localStorage.setItem("darkMode", null)
}

btnDark.addEventListener('click', () => {

    let i = document.querySelector('.btnDark i')

    

    darkMode = localStorage.getItem("darkMode")
    if(darkMode !== "enabled"){
        enableDarkTheme()

        i.classList.remove("fa-moon-o")
        i.classList.add("fa-sun-o")
    }
    else{
        disableDarkTheme()
        
        i.classList.remove("fa-sun-o")
        i.classList.add("fa-moon-o")
    }
})