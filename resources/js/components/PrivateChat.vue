<template>
    <v-layout row>
        <v-flex class="online-users" xs3>
      <v-list>
          <v-list-item
            v-for="friend in friends"
            :color="(friend.id==activeFriend)?'green':''"
            :key="friend.id"
            @click="activeFriend=friend.id"
          >
            <v-list-item-action>
              <v-icon :color="(onlineFriends.find(user=>user.id===friend.id))?'green':'red'">account_circle</v-icon>
            </v-list-item-action>

            <v-list-item-content>
              <v-list-item-title>{{friend.name}}</v-list-item-title>
            </v-list-item-content>
          </v-list-item>


        </v-list>

    </v-flex>
        <v-flex id="privateMessageBox" class="messages mb-5" xs9>
        <message-list :user="user" :all-messages="allMessages"></message-list>

       

        <v-footer
                height="auto"
                fixed
                color="grey"
        >
            <v-layout row >

                <v-flex xs6 >
                    <v-text-field
                            rows=2
                            v-model="message"
                            label="Enter Message"
                            single-line
                            @keyup.enter="sendMessage"
                    ></v-text-field>
                </v-flex>

                <v-flex xs4>
                    <v-btn
                            @click="sendMessage"
                            dark class="mt-3 ml-2 white--text" small color="green">send</v-btn>


                </v-flex>

            </v-layout>


        </v-footer>


    </v-flex>

    </v-layout>
</template>

<script>
import MessageList from './_message-list';
export default {
    props: ['user'],
    components:{
        MessageList
    },

    data(){
        return{
            message:null,
            activeFriend:null,
            typingFriend:{},
            allMessages:[],
            onlineFriends: [],
            typingClock:null,
            users:[],
            token:document.head.querySelector('meta[name="csrf-token"]').content

        }
    },

    computed:{
      friends(){
        return this.users
        
      },
      
    },


    watch:{
        files:{
            deep:true,
            handler(){
            let success=this.files[0].success;
            if(success){
                this.fetchMessages();
            }
            }
        },
        activeFriend(val){
            this.fetchMessages();
        },
        '$refs.upload'(val){
            console.log(val);
        }
        },

     methods:{
        onTyping(){
            Echo.private('privatechat.'+this.activeFriend).whisper('typing',{
                user:this.user
            });
        },

        sendMessage(){
            //check if there message
            if(!this.message){
                return alert('Please enter message');
            }
            if(!this.activeFriend){
                return alert('Please select friend');
            }
            axios.post('/messages/'+this.activeFriend, {message: this.message}).then(response => {
                        this.message=null;
                        this.allMessages.push(response.data.message)
                        setTimeout(this.scrollToEnd,100);
            }).then((res) =>{

            }).catch(error =>{
                
            });
            
           
        },

        fetchMessages() {
            if(!this.activeFriend){
            return alert('Please select friend');
            }
                axios.get('/messages/'+this.activeFriend).then(response => {
                    this.allMessages = response.data;
                setTimeout(this.scrollToEnd,100);
                });
            },

        fetchUsers() {
            axios.get('/users').then(response => {
                this.users = response.data;
                if(this.friends.length>0){
                  this.activeFriend=this.friends[0].id;
                }
            });
        },

        scrollToEnd(){
            document.getElementById('privateMessageBox').scrollTo(0,99999);
        },
        
        onInput(e){
            if(!e){
                return false;
            }
            if(!this.message){
                this.message=e.native;
            }else{
                this.message=this.message + e.native;
            }
           
        },
        onResponse(e){
            console.log('onrespnse file up',e);
        }
    },

    mounted(){

    },

    created(){   
        
        //console.log(this.users)
        this.fetchUsers();
        this.fetchMessages()
        Echo.join('plchat')
            .here((users) => {
                //console.log('online',users);
                this.onlineFriends=users;
            })
            .joining((user) => {
                this.onlineFriends.push(user);
                //console.log('joining',user.name);
            })
              .leaving((user) => {
                  this.onlineFriends.splice(this.onlineFriends.indexOf(user),1);
                  //console.log('leaving',user.name);
              });
             
            Echo.private('privatechat.'+this.user.id)
                .listen('PrivateMessageSent',(e)=>{
                    this.activeFriend=e.message.user_id;
                    this.allMessages.push(e.message)
                    setTimeout(this.scrollToEnd,100);
                })
                .listenForWhisper('typing', (e) => {
                    if(e.user.id==this.activeFriend){
                        this.typingFriend=e.user;
                        
                        if(this.typingClock) clearTimeout();
                        this.typingClock=setTimeout(()=>{
                                                this.typingFriend={};
                                            },9000);
                    }
                 
                });
    }


    
    

}
</script>

<style scoped>
    .online-users,.messages{
        overflow-y:scroll;
        height:100vh;
}
</style>