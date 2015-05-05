<?php
class UsersController extends AppController{

    public $uses = array('Deck','User', 'Card', 'Category', 'Favorite', 'Score', 'Achievement');


    public function achievement(){
       // $userId = 1;

        $this->_getCountfavoriteByUserId();
        $this->_getCountUploadDeckByUserId();
        $this->_getTopScoreByUserId();
        $this->_getAchievementRule();

    }

    public function adminAchievement(){
    //    $userId = 1;

//        $this->_getCountfavoriteByUserId($userId);
//        $this->_getCountUploadDeckByUserId($userId);
//        $this->_getTopScoreByUserId($userId);
        $this->_getAchievementRule();

       // $this -> render(`/user/admin-acrhievment.ctp`);

    }

    private function _getCountfavoriteByUserId($userId = 1){

        $count = $this->Favorite->find('count', [
            'conditions' => [
                'user.id' => $userId
            ]
        ]);

        $this->set('addict', $count);
    }

    private function _getCountUploadDeckByUserId($userId = 1){

        $count = $this->Deck->find('count', [
            'conditions' => [
                'user.id' => $userId
            ],
            'recursive' => 1
        ]);

        $this->set('upload', $count);
    }

    private function _getTopScoreByUserId($userId = 1){

        $score = $this->Score->find('first', [
            'conditions' => [
                'user.id' => $userId
            ],
            'order' => [
                'Score.score' => 'DESC'
            ]
        ]);

        $this->set('top', $score);
    }

    private function _getAchievementRule(){
        $achievement = $this->Achievement->find('first', [
            'conditions' => [
                'Achievement.id' => 1
            ]
        ]);

        $this->set('achievement', $achievement);
    }

    public function editAchievement(){
        if ($this->request->is('post')) {
            $data = [
                'Achievement' => [
                    'id' => 1,
                    'favorite' => trim($this->request->data['Achievement']['favorite']),
                    'top_score' => trim($this->request->data['Achievement']['top_score']),
                    'upload' => trim($this->request->data['Achievement']['upload']),
                    'genius' => trim($this->request->data['Achievement']['genius']),
                    'share' => trim($this->request->data['Achievement']['share'])
                ]
            ];

            if($this->Achievement->save($data)){
                $this->Session->setFlash('แก้ไขบัญชีเรียบร้อยแล้ว');
                $this->redirect(['action' => 'adminAchievement']);
            }else{
                $this->Session->setFlash("เกิดข้อผิดพลาดในการแก้ไข้บัญชี");
            }

        };
    }

}
?>