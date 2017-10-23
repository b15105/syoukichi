<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/spanner.proto

namespace GPBMetadata\Google\Spanner\V1;

class Spanner
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Auth::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Spanner\V1\Keys::initOnce();
        \GPBMetadata\Google\Spanner\V1\Mutation::initOnce();
        \GPBMetadata\Google\Spanner\V1\ResultSet::initOnce();
        \GPBMetadata\Google\Spanner\V1\Transaction::initOnce();
        \GPBMetadata\Google\Spanner\V1\Type::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a911a0a1f676f6f676c652f7370616e6e65722f76312f7370616e6e6572" .
            "2e70726f746f1211676f6f676c652e7370616e6e65722e76311a15676f6f" .
            "676c652f6170692f617574682e70726f746f1a1b676f6f676c652f70726f" .
            "746f6275662f656d7074792e70726f746f1a1c676f6f676c652f70726f74" .
            "6f6275662f7374727563742e70726f746f1a1f676f6f676c652f70726f74" .
            "6f6275662f74696d657374616d702e70726f746f1a1c676f6f676c652f73" .
            "70616e6e65722f76312f6b6579732e70726f746f1a20676f6f676c652f73" .
            "70616e6e65722f76312f6d75746174696f6e2e70726f746f1a22676f6f67" .
            "6c652f7370616e6e65722f76312f726573756c745f7365742e70726f746f" .
            "1a23676f6f676c652f7370616e6e65722f76312f7472616e73616374696f" .
            "6e2e70726f746f1a1c676f6f676c652f7370616e6e65722f76312f747970" .
            "652e70726f746f22280a1443726561746553657373696f6e526571756573" .
            "7412100a08646174616261736518012001280922170a0753657373696f6e" .
            "120c0a046e616d6518012001280922210a1147657453657373696f6e5265" .
            "7175657374120c0a046e616d6518012001280922240a1444656c65746553" .
            "657373696f6e52657175657374120c0a046e616d6518012001280922b803" .
            "0a114578656375746553716c52657175657374120f0a0773657373696f6e" .
            "180120012809123b0a0b7472616e73616374696f6e18022001280b32262e" .
            "676f6f676c652e7370616e6e65722e76312e5472616e73616374696f6e53" .
            "656c6563746f72120b0a0373716c18032001280912270a06706172616d73" .
            "18042001280b32172e676f6f676c652e70726f746f6275662e5374727563" .
            "7412490a0b706172616d5f747970657318052003280b32342e676f6f676c" .
            "652e7370616e6e65722e76312e4578656375746553716c52657175657374" .
            "2e506172616d5479706573456e74727912140a0c726573756d655f746f6b" .
            "656e18062001280c12420a0a71756572795f6d6f646518072001280e322e" .
            "2e676f6f676c652e7370616e6e65722e76312e4578656375746553716c52" .
            "6571756573742e51756572794d6f64651a4a0a0f506172616d5479706573" .
            "456e747279120b0a036b657918012001280912260a0576616c7565180220" .
            "01280b32172e676f6f676c652e7370616e6e65722e76312e547970653a02" .
            "3801222e0a0951756572794d6f6465120a0a064e4f524d414c100012080a" .
            "04504c414e1001120b0a0750524f46494c45100222db010a0b5265616452" .
            "657175657374120f0a0773657373696f6e180120012809123b0a0b747261" .
            "6e73616374696f6e18022001280b32262e676f6f676c652e7370616e6e65" .
            "722e76312e5472616e73616374696f6e53656c6563746f72120d0a057461" .
            "626c65180320012809120d0a05696e646578180420012809120f0a07636f" .
            "6c756d6e73180520032809122a0a076b65795f73657418062001280b3219" .
            "2e676f6f676c652e7370616e6e65722e76312e4b6579536574120d0a056c" .
            "696d697418082001280312140a0c726573756d655f746f6b656e18092001" .
            "280c22620a17426567696e5472616e73616374696f6e5265717565737412" .
            "0f0a0773657373696f6e18012001280912360a076f7074696f6e73180220" .
            "01280b32252e676f6f676c652e7370616e6e65722e76312e5472616e7361" .
            "6374696f6e4f7074696f6e7322c2010a0d436f6d6d697452657175657374" .
            "120f0a0773657373696f6e18012001280912180a0e7472616e7361637469" .
            "6f6e5f696418022001280c480012470a1673696e676c655f7573655f7472" .
            "616e73616374696f6e18032001280b32252e676f6f676c652e7370616e6e" .
            "65722e76312e5472616e73616374696f6e4f7074696f6e734800122e0a09" .
            "6d75746174696f6e7318042003280b321b2e676f6f676c652e7370616e6e" .
            "65722e76312e4d75746174696f6e420d0a0b7472616e73616374696f6e22" .
            "460a0e436f6d6d6974526573706f6e736512340a10636f6d6d69745f7469" .
            "6d657374616d7018012001280b321a2e676f6f676c652e70726f746f6275" .
            "662e54696d657374616d70223a0a0f526f6c6c6261636b52657175657374" .
            "120f0a0773657373696f6e18012001280912160a0e7472616e7361637469" .
            "6f6e5f696418022001280c32e90c0a075370616e6e65721298010a0d4372" .
            "6561746553657373696f6e12272e676f6f676c652e7370616e6e65722e76" .
            "312e43726561746553657373696f6e526571756573741a1a2e676f6f676c" .
            "652e7370616e6e65722e76312e53657373696f6e224282d3e493023c223a" .
            "2f76312f7b64617461626173653d70726f6a656374732f2a2f696e737461" .
            "6e6365732f2a2f6461746162617365732f2a7d2f73657373696f6e731290" .
            "010a0a47657453657373696f6e12242e676f6f676c652e7370616e6e6572" .
            "2e76312e47657453657373696f6e526571756573741a1a2e676f6f676c65" .
            "2e7370616e6e65722e76312e53657373696f6e224082d3e493023a12382f" .
            "76312f7b6e616d653d70726f6a656374732f2a2f696e7374616e6365732f" .
            "2a2f6461746162617365732f2a2f73657373696f6e732f2a7d1292010a0d" .
            "44656c65746553657373696f6e12272e676f6f676c652e7370616e6e6572" .
            "2e76312e44656c65746553657373696f6e526571756573741a162e676f6f" .
            "676c652e70726f746f6275662e456d707479224082d3e493023a2a382f76" .
            "312f7b6e616d653d70726f6a656374732f2a2f696e7374616e6365732f2a" .
            "2f6461746162617365732f2a2f73657373696f6e732f2a7d12a3010a0a45" .
            "78656375746553716c12242e676f6f676c652e7370616e6e65722e76312e" .
            "4578656375746553716c526571756573741a1c2e676f6f676c652e737061" .
            "6e6e65722e76312e526573756c74536574225182d3e493024b22462f7631" .
            "2f7b73657373696f6e3d70726f6a656374732f2a2f696e7374616e636573" .
            "2f2a2f6461746162617365732f2a2f73657373696f6e732f2a7d3a657865" .
            "6375746553716c3a012a12be010a134578656375746553747265616d696e" .
            "6753716c12242e676f6f676c652e7370616e6e65722e76312e4578656375" .
            "746553716c526571756573741a232e676f6f676c652e7370616e6e65722e" .
            "76312e5061727469616c526573756c74536574225a82d3e4930254224f2f" .
            "76312f7b73657373696f6e3d70726f6a656374732f2a2f696e7374616e63" .
            "65732f2a2f6461746162617365732f2a2f73657373696f6e732f2a7d3a65" .
            "78656375746553747265616d696e6753716c3a012a30011291010a045265" .
            "6164121e2e676f6f676c652e7370616e6e65722e76312e52656164526571" .
            "756573741a1c2e676f6f676c652e7370616e6e65722e76312e526573756c" .
            "74536574224b82d3e493024522402f76312f7b73657373696f6e3d70726f" .
            "6a656374732f2a2f696e7374616e6365732f2a2f6461746162617365732f" .
            "2a2f73657373696f6e732f2a7d3a726561643a012a12ac010a0d53747265" .
            "616d696e6752656164121e2e676f6f676c652e7370616e6e65722e76312e" .
            "52656164526571756573741a232e676f6f676c652e7370616e6e65722e76" .
            "312e5061727469616c526573756c74536574225482d3e493024e22492f76" .
            "312f7b73657373696f6e3d70726f6a656374732f2a2f696e7374616e6365" .
            "732f2a2f6461746162617365732f2a2f73657373696f6e732f2a7d3a7374" .
            "7265616d696e67526561643a012a300112b7010a10426567696e5472616e" .
            "73616374696f6e122a2e676f6f676c652e7370616e6e65722e76312e4265" .
            "67696e5472616e73616374696f6e526571756573741a1e2e676f6f676c65" .
            "2e7370616e6e65722e76312e5472616e73616374696f6e225782d3e49302" .
            "51224c2f76312f7b73657373696f6e3d70726f6a656374732f2a2f696e73" .
            "74616e6365732f2a2f6461746162617365732f2a2f73657373696f6e732f" .
            "2a7d3a626567696e5472616e73616374696f6e3a012a129c010a06436f6d" .
            "6d697412202e676f6f676c652e7370616e6e65722e76312e436f6d6d6974" .
            "526571756573741a212e676f6f676c652e7370616e6e65722e76312e436f" .
            "6d6d6974526573706f6e7365224d82d3e493024722422f76312f7b736573" .
            "73696f6e3d70726f6a656374732f2a2f696e7374616e6365732f2a2f6461" .
            "746162617365732f2a2f73657373696f6e732f2a7d3a636f6d6d69743a01" .
            "2a1297010a08526f6c6c6261636b12222e676f6f676c652e7370616e6e65" .
            "722e76312e526f6c6c6261636b526571756573741a162e676f6f676c652e" .
            "70726f746f6275662e456d707479224f82d3e493024922442f76312f7b73" .
            "657373696f6e3d70726f6a656374732f2a2f696e7374616e6365732f2a2f" .
            "6461746162617365732f2a2f73657373696f6e732f2a7d3a726f6c6c6261" .
            "636b3a012a427b0a15636f6d2e676f6f676c652e7370616e6e65722e7631" .
            "420c5370616e6e657250726f746f50015a38676f6f676c652e676f6c616e" .
            "672e6f72672f67656e70726f746f2f676f6f676c65617069732f7370616e" .
            "6e65722f76313b7370616e6e6572aa0217476f6f676c652e436c6f75642e" .
            "5370616e6e65722e5631620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

