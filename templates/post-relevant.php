<!-- The total size of related posts  -->


<!-- An random integer that bigger than 0  -->


<!-- Equals to TAG_SCORE / {max_categories_hierarchy}  -->


<!-- Fill with the other newlest posts  -->


<div id="related-posts" class="mb-2 mb-sm-4">
    <h3 class="pt-2 mb-4 ml-1"
        data-toc-skip>相关文章</h3>
    <div class="card-deck mb-4">


        <div class="card">
            <a href="/posts/Android_GLReadpixles/">
                <div class="card-body">
                    <!--
            Date format snippet
            See: ${JS_ROOT}/utils/locale-dateime.js
        -->


                    <em class="small"
                        data-ts="1660126440"
                        data-df="YYYY/MM/DD"
                    >
                        2022/08/10
                    </em>

                    <h3 class="pt-0 mt-1 mb-3" data-toc-skip>Android美颜OpenGL
                        GLReadpixles耗时的一种解决方案</h3>
                    <div class="text-muted small">
                        <p>


                            Android美颜

                            Pipeline:

                            相机 -&amp;gt; YUV Raw-&amp;gt; 美颜库处理 -&amp;gt; YUV Raw -&amp;gt; 编码


                            方案在Android 某些系统会遇到glreadpixles 耗时严重;

                            可改为:

                            相机 -&amp;gt;texture -&amp;gt; 美颜 -&amp;gt; texure -&amp;gt;mediacodec方案


                        </p>
                    </div>
                </div>
            </a>
        </div>


        <div class="card">
            <a href="/posts/Compile-ffmpeg-4.2.1-for-mac-os-with-openssl/">
                <div class="card-body">
                    <!--
            Date format snippet
            See: ${JS_ROOT}/utils/locale-dateime.js
        -->


                    <em class="small"
                        data-ts="1660127460"
                        data-df="YYYY/MM/DD"
                    >
                        2022/08/10
                    </em>

                    <h3 class="pt-0 mt-1 mb-3" data-toc-skip>Compile ffmpeg 4.2.1 for mac os with
                        openssl</h3>
                    <div class="text-muted small">
                        <p>


                            编译环境：mac os x 10.15.3 ， ffmpeg 4.2.1

                            ./configure --target-os=darwin \
                            --disable-programs \
                            --libdir=./ffmpegbuild/lib \
                            --incdir=./ffmpegbuild/include \
                            ...
                        </p>
                    </div>
                </div>
            </a>
        </div>


        <div class="card">
            <a href="/posts/webrtc_pacedsender/">
                <div class="card-body">
                    <!--
            Date format snippet
            See: ${JS_ROOT}/utils/locale-dateime.js
        -->


                    <em class="small"
                        data-ts="1660127700"
                        data-df="YYYY/MM/DD"
                    >
                        2022/08/10
                    </em>

                    <h3 class="pt-0 mt-1 mb-3" data-toc-skip>WebRTC中PacedSender工作原理和代码分析</h3>
                    <div class="text-muted small">
                        <p>


                            摘抄一段 PacedSender 简介，下面的链接对该模块的工作原理做了详细的介绍，今天大致看了下这个模块的代码，记录一下


                            在estimator根据网络状态决策出新的通信码率（target
                            bitrate），它会将这个码率设置到pacer当中，要求pacer按照新的码率来计算发包频率。因为在视频通信中，单帧视频可能有上百KB,如果是当视频帧被编码器编码出来后，就立即进行RTP打包发送...
                        </p>
                    </div>
                </div>
            </a>
        </div>

    </div> <!-- .card-deck -->
</div> <!-- #related-posts -->
