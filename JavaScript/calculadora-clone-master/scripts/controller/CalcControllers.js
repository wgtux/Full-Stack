class CalcController{

    constructor(){

        //criando atributos
        this._operation = []
        this._locale = 'pt-BR'
        this._displayCalcEl = document.querySelector("#display")
        this._dateEl = document.querySelector("#data")
        this._timeEl = document.querySelector("#hora")
        this._currentDate
        this.initialize()
        this.initButtonsEvents()

    }

    initialize(){
        
        this.setDisplayDateTime()

       //intervalo de segundos na calculadora
       setInterval(()=> {
        
        this.setDisplayDateTime()
       
        },1000) 

        this.setLastNumberToDisplay()
    }

    addEventListenerAll(element, events, fn){

            events.split(' ').forEach(event => {

                element.addEventListener(event, fn, false);
            });
    }

 //limpar todas entradas   
    clearAll(){
        this._operation = []
        this.setLastNumberToDisplay()
    }

//limpar ultima entrada
    clearEntry(){
        this._operation.pop()
        this.setLastNumberToDisplay()
    }

//Verificando a ultma operação
    getLastOperation(){
        return this._operation[this._operation.length-1]
    }

    setLastOperation(value){
        this._operation[this._operation.length-1] = value

    }

 //Verifica se é operador   
    isOperation(value){
       return (['+','-','/','%','*'].indexOf(value) > -1)
    }

//Verfica se tem 3 itens no array para realizar o calculo
    pushOperation(value){
        this._operation.push(value)

        if(this._operation.length > 3){

           this.calc()
        }
    }    

    
    calc(){
        let last=''

        if (this._operation.length > 3){
            last = this._operation.pop()
        }

        let result = eval(this._operation.join(""))

        if(last == '%'){

            result /=100
            this._operation=[result]
        
        } else{
        
            this._operation = [result]

            if (last) this._operation.push(last)
        }
       
        this.setLastNumberToDisplay()

    }

//adicionando numero no display
    setLastNumberToDisplay(){
        
        let lastNumber

        for (let i = this._operation.length-1; i>=0; i--){

            if (!this.isOperation(this._operation[i])){
                lastNumber = this._operation[i]
                break
            }
        }

        if (!lastNumber) lastNumber=0
        this.displayCalc=lastNumber
    }
    

//adicionando operação
    addOperation(value){
        
        if(isNaN(this.getLastOperation())){
            
            if(this.isOperation(value)){
                //trocar operador
                this.setLastOperation(value)

            } else if(isNaN(value)){
                //outra coisa
                console.log('outra coisa',value)

            }else{
                this.pushOperation(value)
                this.setLastNumberToDisplay()

            }

        } else{
            
            if (this.isOperation(value)){

                this.pushOperation(value)

            } else{
                let newValue = this.getLastOperation().toString() + value.toString()
                this.setLastOperation(parseInt(newValue))
                //mostrar numero no display
                this.setLastNumberToDisplay()
            }
           
        }
       
        console.log(this._operation)
    }

//mensagem de erro no display
    setError(){
        this.displayCalc = "Error"
    }

//adicionando os digitos e operações
    execBtn(value){
        
        switch(value){

            case 'ac':
                this.clearAll();
                break

            case 'ce':
                this.clearEntry();
                break

            case 'soma':
                this.addOperation('+')
                break

            case 'subtracao':
                this.addOperation('-')
                break

            case 'divisao':
                this.addOperation('/')
                break

            case 'multiplicacao':
                this.addOperation('*')
                break

            case 'porcento':
                this.addOperation('%')
                break

            case 'igual':
                this.calc()
                break

            case 'ponto':
            this.addOperation('.')
                break
            case '0':
            case '1':
            case '2':
            case '3':
            case '4':
            case '5':
            case '6':
            case '7':
            case '8':    
            case '9':
                this.addOperation(parseInt(value))
                break
            default:
                this.setError();
                break
        }

    }

    //selecionar os botões da calculadora
    initButtonsEvents(){
        let buttons = document.querySelectorAll("#buttons > g, #parts > g")
        //percorrendo os botões
        buttons.forEach((btn, index)=>{

            this.addEventListenerAll(btn, "click drag", e => {
            
                let textBtn = btn.className.baseVal.replace("btn-", "")

                this.execBtn(textBtn)
    
            });

            this.addEventListenerAll(btn, "mouseover mouseup mousedown", e =>{

                btn.style.cursor = "pointer"

            });
        });
    }

    setDisplayDateTime(){
        this.displayDate = this.currentDate.toLocaleDateString(this._locale)
        this.displayTime = this.currentDate.toLocaleTimeString(this._locale)
    }

    get displayTime(){
        return this._timeEl.innerHTML
    }
    
    set displayTime(v){
        return this._timeEl.innerHTML = v
    }

    get displayDate(){
        return this._dateEl.innerHTML
    }

    set displayDate(v){
        this._dateEl.innerHTML = v
    }

    get displayCalc(){
        return this._displayCalcEl.innerHTML
    }

    set displayCalc(v){
        this._displayCalcEl.innerHTML = v
    }

    get currentDate(){
        return new Date()
    }

    set currentDate(d){
        this._currentDate = d
    }
}