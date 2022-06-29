import { Component } from 'react';
import axios from 'axios';
import '../App.css';

class Login extends Component{

    //the state of the login form
    constructor(props){
        super(props);
        this.state = {
            username: "",
            password: "",
            sent: false,
            error: null
        };
    }

    //form submit handler method
 //  tryLogin(event){
 //      event.preventDefault()
 //      console.log(this.state)
 //      axios({
 //          method: 'post',
 //          url: 'http://localhost/login-app/build/api/login.php',
 //          headers: {'content-type':'application/json'},
 //          data: this.state
 //      })
 //      .then(result => {
 //          this.setState({
 //              sent: result.data.sent
 //          })
 //      })
 //     .catch(error => this.setState({ error: error.message}))
 // }

 trylogin(event){
    event.preventDefault()


    const userData = this.state


     axios.post("http://localhost/login-app/api/login.php", userData)
     .then((response) => {
        console.log(response.status)
        console.log(response.data)
     })
     .catch(error => {
        alert(error.response)
     })

     this.setState({
        username: '',
        password:'',
        sent:'',
        error:''
     })
   
 }

 //FUNGE
 //  tryLogin(event){
 //      event.preventDefault();
 //      console.log(this.state);
 //      
 //      axios.get('http://localhost/login-app/api/prova.php')
 //      .then((res) => {
 //   
 //          console.log("SUCCESS")
 //          document.getElementById("text").innerHTML = res.data.benvenuto
 //     
 //          console.log(res.data)
 //      })
 //      .catch((error) => {
 //          console.log(error)
 //      });
 //      
 //  }

    //how to send data from react to php api
    //install axios using npm, it works well with http requests
    

    //(e) => this.tryLogin(e)
    render() {
      
        return(
            
            <div>
                <form action="#">
                    <label id="text">Username</label><br />
                    <input type="text" id="username" name="username" 
                    value={this.state.username}
                    onChange={(e) => this.setState({username: e.target.value})}
                    require />
                    <br />
                    <label>Password</label><br />
                    <input type="password" id="passowrd" name="password"
                    value={this.state.password}
                    onChange={(e) => this.setState({password: e.target.value})}
                    required />
                    <br />
                    <input type="submit" id="send" value="Send it!!"
                    onClick={this.trylogin} />
                </form>

            </div>
        );
    }
}
export default Login;