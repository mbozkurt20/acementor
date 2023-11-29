<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FrequentlyAskedQuestions extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $frequents = [
            [
                'id' => 1,
                'title' => 'Amazon FBA Nedir ?',
                'body' => "Amazon FBA, Amazon'da satış yapma yöntemidir. Ürünlerinizi toplu olarak Amazon Amerika veya diğer ülkedeki depolarına göndererek satış yapma yöntemine kısaca FBA denilmektedir. Amazon FBA sisteminde paketleme, depolama, müşteri ilişkileri, nakliye, iade yönetimi gibi tüm süreci Amazon sizin yerinize yönetmektedir."
            ],
            [
                'id' => 2,
                'title' => "Amazon'da maliyetlerim neler olacak ?",
                'body' => "Amazon'da satış yaparken bilmeniz gereken maliyetleriniz aylık mağaza kira ücreti, ürün boyutlarına bağlı olarak FBA ücretleri, satış komisyon oranı, lojistik maliyetleri ve yazılım maliyetleridir."
            ],
            [
                'id' => 3,
                'title' => "Amazon'dan nasıl ödeme alabilirim ?",
                'body' => "Amazon'dan 2 haftalık periyotlarda ödeme alırsınız. Amazon bakiyenizin bir bölümüne FBA, iade ve komisyon maliyetlerini karşılamak amacıyla rezerv koyacaktır. Ödemelerinizi Payooner, Wise, Hyperwallet ve Paypal gibi sanal bankacılık sistemleriyle alabilirsiniz."
            ],
            [
                'id' => 4,
                'title' => "Ürünlerimi Türkiye'den gönderebilir miyim ?",
                'body' => "Evet, gönderebilirsiniz fakat Amazon'da satış yaparken karşılamanız gereken çok hassas müşteri memnuniyet metrikleri bulunmaktadır. Müşteri memnuniyetinizi sağlamak ve Amazon hesabınızın sağlını olumsuz etkilememek için ya Amazon'un FBA depolarını kullanmalısınız."
            ],
            [
                'id' => 5,
                'title' => "Şirket olmadan satış yapabilir miyim ?",
                'body' => "Amazon'da şirketiniz olmadan bireysel satıcı hesabı açabilirsiniz. Ancak bu şekilde çok kısa bir süre ilerleyebilirsiniz. Amazon'da uzun dönemli bir satış planınız varsa mutlaka şahıs, limited veya anonim şirketi sahibi olmalısınız. Amazon'un sunduğu avantajlardan yararlanmak için profesyonel hesaba geçiş yapmalısınız."
            ],
            [
                'id' => 6,
                'title' => "Hangi Amazon pazarına giriş yapmalıyım ?",
                'body' => "Amazon dünya üzerinde birçok ülkede aktif durumdadır. Türk satıcılar için en uygun pazarlar Amerika, İngiltere, Canada ve Amazon Avrupa'daki pazar yerleridir. Satış yapmak istediğiniz ürünlere karar verdikten sonra sizlere en uygun ülkeye karar vermek için mutlaka detaylı bir pazar araştırması yapmalısınız. Kar marjı analizi de yaparak ürünlerinize en uygun pazarı belirleyerek doğru fiyat stratejisiyle giriş yapmalısınız."
            ],
            [
                'id' => 7,
                'title' => "Amazon'da reklam vermek zorunlu mu ?",
                'body' => "Amazon'da reklam vermek zorunlu bir adım değildir. FBA iş modeliyle çalıştığınızda reklam vermenize gerek dahi yoktur. Reklam sadece PL (Private Label) iş modelinde verilmesi gerekmektedir."
            ],
            [
                'id' => 8,
                'title' => "Kargo gönderimi yaparken Amazon'a mı fatura keseceğim ?",
                'body' => "Amazon FBA depolarına ürün gönderirken ihracatı yaptığınız firma Amazon değildir. Bu yüzden faturanızı keserken ithalatçı olarak Amazonu gösteremezsiniz. Satış yapmak istediğiniz ülkede şirketiniz varsa kendi şirketinizi ithalatçı gösterebilir veya orada gümrük işlemlerinizi yönetecek bir firmayla anlaşabilirsiniz."
            ],
        ];
        return view('components.frequently-asked-questions',compact('frequents'));
    }
}
